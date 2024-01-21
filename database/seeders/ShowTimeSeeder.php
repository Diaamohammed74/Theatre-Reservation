<?php

namespace Database\Seeders;

use App\Models\ShowTime;
use Illuminate\Database\Seeder;


class ShowTimeSeeder extends Seeder
{

    public function run(): void
    {
        ShowTime::factory()->count(2)->create();
    }
}
