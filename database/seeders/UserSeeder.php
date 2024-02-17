<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Generator;

class UserSeeder extends Seeder
{
       public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'iljusa@gmail.com',
            'password' => Hash::make('adminADMIN'),
        ]);

        DB::table('users')->insert([
            'name' => 'Погребицький Ілля',
            'email' => 'iljusa@gmail.com',
            'password' => Hash::make('adminADMIN'),
        ]);
    }
}
