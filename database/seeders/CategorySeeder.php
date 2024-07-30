<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker= Faker::create();
       

        DB::table('categories')->insert([
            ['name'=>'Giải Trí'],
            ['name'=>'Công Việc'],
            ['name'=>'Giáo Dục']
        ]);
    }
    }

