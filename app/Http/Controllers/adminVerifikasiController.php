<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;

class adminVerifikasiController extends Controller
{
    public function view(){
        
        $peserta = Peserta::all();
        

        return view('admin.adminVerifikasi',['pesertas'=>$peserta]);
    }

    public function verPeserta(Peserta $peserta){

        //dd($peserta->foto);
        return view('admin.adminSetVer',['peserta'=>$peserta]);
    }
}
