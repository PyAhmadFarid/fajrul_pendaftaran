<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

class dataPesertaController extends Controller
{
    

    public function view(){

        $peserta = Peserta::where('user_id', '=', auth()->id())->with('user')->get()->first();
        return view('peserta.dataPeserta',['peserta'=>$peserta]);
    }

    public function save(Request $request){

        $peserta = Peserta::where('user_id', '=', auth()->id())->get()->first();
        $request->validate([
            "nama" => "required",
            "alamat" => "required",
            "nomer_hp" => "required",
            "email" => "required",
            "tempat_lahir" => "required",
            "asal_sekolah" => "required",
            "tgl_lahir" => "required",
            "gender" => "required",
            "foto" => $peserta ? "" : "required"
        ]);

        if ($request->foto != null) {
            $fotoname = time() . "_" . $request->nama . "_" . auth()->id() . '.' . $request->foto->extension();
            $request->foto->move(public_path('foto_peserta'), $fotoname);
            if ($peserta) {
                File::delete('foto_peserta/' . $peserta->foto);
            }
        } else {
            $fotoname = $peserta->foto;
        }



        if ($peserta) {
            $peserta->nama = $request->nama;
            $peserta->alamat = $request->alamat;
            $peserta->nomer_hp = $request->nomer_hp;

            $peserta->tempat_lahir = $request->tempat_lahir;
            $peserta->tgl_lahir = $request->tgl_lahir;
            $peserta->asal_sekolah = $request->asal_sekolah;
            $peserta->foto = $fotoname;
            $peserta->gender = $request->gender;
            $peserta->save();

            $user = User::find(auth()->id());
            $user->email = $request->email;
            $user->save();


        } else {

            Peserta::create([
                "nama" => $request->nama,
                "alamat" => $request->alamat,
                "nomer_hp" => $request->nomer_hp,
                "tempat_lahir" => $request->tempat_lahir,
                "asal_sekolah" => $request->asal_sekolah,
                "tgl_lahir" => $request->tgl_lahir,
                "user_id" => auth()->id(),
                "gender"=>$request->gender,
                "foto" => $fotoname
            ]);
        }

        return redirect()->route('dataPeserta');
    }
}
