<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        for ($i=0;$i<15;$i++){
            DB::table('posts')->insert([
                'name' => str::random(15)
            ]);
        }
    }
}

