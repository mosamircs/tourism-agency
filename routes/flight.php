<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FlightController;





Route::get('flights', [FlightController::class, 'index'])->name('flights');

Route::get('/reserve',[FlightController::class,'create'])->name('reserve');

Route::get('/flightadd',[FlightController::class,'create'])->name('addflight');

Route::post('/flightstore',[FlightController::class,'store'])->name('flightstore');

Route::get('/customer', [CustomerController::class,'index'])->name('customer');

Route::get('/', function () {return view('index');})->name('index');

Route::get('/reserveflight',[FlightController::class,'create'])->name('reserveflight');

Route::get('/addflight',[FlightController::class,'create'])->name('addflight');
