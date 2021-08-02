<?php

namespace Database\Seeders;

use App\Models\Peserta;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            "name"=>"fajrul",
            "email"=>"fajrul@gmail.com",
            "password"=>bcrypt("qwer")
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            "name"=>"farid",
            "email"=>"farid@gmail.com",
            "password"=>bcrypt("qwer")
        ]);

        $user->assignRole('user');

        $peserta = Peserta::create([
            "nama" => "farid",
            "alamat" => "mentaras",
            "nomer_hp" => "090909090",
            "tempat_lahir" => "gresik",
            "asal_sekolah" => "SMK",
            "tgl_lahir" => "2000-12-20",
            "user_id" => $user->id,
            "gender"=>"0",
            "foto" => "aa.jpg",
            "bukti_pembayaran"=>"bb.jpg"
        ]);

    }
}
