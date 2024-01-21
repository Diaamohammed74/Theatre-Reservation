<?php

namespace Database\Factories;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShowTimeFactory extends Factory
{

    public function definition(): array
    {
        $movieId = DB::table('movies')->inRandomOrder()->value('id');
        $timeSlotId = DB::table('time_slots')->inRandomOrder()->value('id');
        $eventDayId = DB::table('event_days')->inRandomOrder()->value('id');
        return [
            'movie_id' => $movieId,
            'time_slot_id' => $timeSlotId,
            'event_day_id' => $eventDayId,
        ];
    }
}

