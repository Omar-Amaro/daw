<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'category'=>'Art',
            'img'=>'default.jpg'
        ]);

        DB::table('categories')->insert([
            'category'=>'Music',
            'img'=>'default.jpg'
        ]);
        
        DB::table('categories')->insert([
            'category'=>'Photogaphy',
            'img'=>'default.jpg'
        ]);

        DB::table('categories')->insert([
            'category'=>'Sport',
            'img'=>'default.jpg'
        ]);
    }
}
