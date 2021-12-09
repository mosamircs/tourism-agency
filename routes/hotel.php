<?php

use App\Http\Controllers\HotelController;
use Illuminate\Support\Facades\Route;

Route::get('/hotels',[HotelController::class,"index"])->name('hotels');

Route::get('/reserveroom',[HotelController::class,"reserveroom"])->name('reserveroom');

Route::post('/hotelstore',[HotelController::class,"store"])->name('hotelstore');
