<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReserveShowTime extends Model
{
    use HasFactory;
    protected $fillable = ['name','email','phone','show_time_id'];
    public function showTime(){
        return $this->belongsTo(ShowTime::class,'show_time_id');
    }

}
