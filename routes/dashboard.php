<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\TimeSlotController;
use Illuminate\Support\Facades\Route;

Route::prefix("dashboard")->name('dashboard.')->group(function () {
    Route::resource('movies', MovieController::class);
    Route::resource('time-slots', TimeSlotController::class);
});
