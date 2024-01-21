<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShowTime extends Model
{
    use HasFactory;
    protected $fillable = [
        'movie_id','time_slot_id','event_day_id'
    ];
    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    public function eventDay()
    {
        return $this->belongsTo(EventDay::class);
    }

    public function timeSlot()
    {
        return $this->belongsTo(TimeSlot::class);
    }
}
