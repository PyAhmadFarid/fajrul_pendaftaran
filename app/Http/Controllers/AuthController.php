<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

    public function loginView()
    {

        return view('auth.login');
    }
    public function login(Request $request)
    {
        $cre = $request->validate([
            "email" => "required",
            "password" => "required",
        ]);
        if (Auth::attempt($cre)) {
            //return redirect()->intended('admin');
            return redirect()->route('home');
        }

        return redirect()->back()->with('gagal','anda tidak terdaftar');
    }
    public function logout(){
        Session::flush();
        Auth::logout();

        return redirect()->route('home');
    }
    public function registerView()
    {

        return view('auth.register');
    }
    public function register(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:3|max:50',
            'email' => 'email',
            'password' => 'min:6|required_with:confirmPassword|same:confirmPassword',
            'confirmPassword' => 'min:6',
            'buktiPembayaran' => 'required'
        ]);

        $user = User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        $user->assignRole('user');

        $fileName = $user->id.time().'_'.$request->nama.'_.'.$request->buktiPembayaran->extension();
        // dd($fileName);
        $request->buktiPembayaran->move(public_path('bukti_pembayaran'),$fileName);

        Peserta::create([
            'nama' =>$request->nama,
            'user_id'=>$user->id,
            'bukti_pembayaran'=>$fileName
        ]);

        return redirect()->route('login');
    }
}
