<?php

use App\Http\Controllers\HotelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;

Route::get('/addsupplier',[SupplierController::class,'create'])->name('addsupplier');

Route::post('/storesupplier',[HotelController::class,'store_supplier'])->name('storesupplier');
