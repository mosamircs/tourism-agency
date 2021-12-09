<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;

Route::get('/cars',[CarController::class,'index'])->name('cars');

Route::get('/reservecar',[CarController::class,'reservecar'])->name('reservecar');

