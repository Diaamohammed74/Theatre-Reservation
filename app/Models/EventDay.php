<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventDay extends Model
{
    use HasFactory;
    protected $fillable=[
        'date',
    ];
    public function scopeAfterOrEqualToday($query){
        return $query->where('date', '>=', today());
    }
    public function scopeNextWeek($query)
    {
        return $query->whereBetween('date', [today(), today()->addDays(6)]);
    }
    
}
