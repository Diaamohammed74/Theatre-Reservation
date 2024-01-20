<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('back.home');
});

require __DIR__ .'\dashboard.php';