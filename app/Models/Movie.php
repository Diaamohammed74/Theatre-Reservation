<?php

namespace App\Models;

use App\Http\Traits\Slugify;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory,Slugify;
    protected $fillable=[
        'name','slug'
    ];
}
