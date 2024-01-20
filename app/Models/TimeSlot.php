<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TimeSlot extends Model
{
    use HasFactory;
    protected $fillable=[
        'start_time','end_time'
    ];
    public function getFormattedStartTimeAttribute(){
        return Carbon::parse($this->start_time )->format('H:i:s A');
    }
    public function getFormattedEndTimeAttribute(){
        return Carbon::parse($this->end_time)->format('H:i:s A');
    }
}
