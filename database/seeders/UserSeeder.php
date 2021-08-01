<?php

namespace Database\Seeders;

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

    }
}
