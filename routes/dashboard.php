<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\EventDayController;
use App\Http\Controllers\ShowTimeController;
use App\Http\Controllers\TimeSlotController;
use App\Http\Controllers\ReserveShowTimeController;

Route::prefix("dashboard")->name('dashboard.')->group(function () {
    Route::view('/', 'back.home')->name('dashboard.index');
    Route::resource('movies', MovieController::class);
    Route::resource('time-slots', TimeSlotController::class);
    Route::resource('event-days', EventDayController::class);
    Route::resource('show-times', ShowTimeController::class);
    Route::get('reserve',[ReserveShowTimeController::class,'index'])->name('reserve.index');

});
