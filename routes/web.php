<?php

use App\Http\Controllers\ReserveShowTimeController;
use Illuminate\Support\Facades\Route;



Route::get('/',[ReserveShowTimeController::class,'create'])->name('create');
Route::post('reserve',[ReserveShowTimeController::class,'store'])->name('reserve');

require __DIR__ .'\dashboard.php';

