<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventDaySeeder extends Seeder
{

    public function run(): void
    {
        $eventDays = [
            ['date' => '2024-01-25'],
            ['date' => '2024-01-26'],
            ['date' => '2024-01-27'],
            ['date' => '2024-01-30'],
        ];

        DB::table('event_days')->insert($eventDays);
    }
}
