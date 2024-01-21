<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimeSlotSeeder extends Seeder
{

    public function run(): void
    {
        $timeSlots = [
            ['start_time' => '18:00:00', 'end_time' => '20:30:00'],
            ['start_time' => '20:30:00', 'end_time' => '22:00:00'],
            ['start_time' => '22:30:00', 'end_time' => '01:00:00'],
        ];
        DB::table('time_slots')->insert($timeSlots);
    }
}
