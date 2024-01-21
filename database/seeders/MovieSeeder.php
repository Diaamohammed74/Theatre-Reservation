<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{

    public function run(): void
    {
        $movies = [
            ['name' => 'The Avengers'],
            ['name' => 'The Superman'],
        ];

        DB::table('movies')->insert($movies);
    }
}
