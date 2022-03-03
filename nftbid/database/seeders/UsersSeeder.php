<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB:: table('users')->insert([
            'name'=>'Administrador 1',
            'email'=>'Admin@gmail.com',
            'password'=> Hash::make('123'),
            'phone'=>'6361167102',
            'alias'=>'admin',
            'img'=>'default.jpg'
        ]);

        DB:: table('users')->insert([
            'name'=>'Anacleto Soto Dominguez',
            'email'=>'Anato@gmail.com',
            'password'=>Hash::make('123'),
            'phone'=>'6361167102',
            'alias'=>'Anato',
            'img'=>'default.jpg'
        ]);
    }
}
