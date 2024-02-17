<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Generator;

class CategorySeeder extends UserSeeder
{
    @return void
    public function run()
    {
        DB::table('categories')->insert([
            'title' => 'Категорія 1',
            'description' => 'опис категорії 1',
        ]);
        DB::table('categories')->insert([
            'title' => 'Категорія 2',
            'description' => 'опис категорії 2',
        ]);
        DB::table('categories')->insert([
            'title' => 'Категорія 3',
            'description' => 'опис категорії 3',
        ]);
        DB::table('categories')->insert([
            'title' => 'Категорія 4',
            'description' => 'опис категорії 4',
        ]);
        DB::table('categories')->insert([
            'title' => 'Категорія 5',
            'description' => 'опис категорії 5',
        ]);
    }
}
       
