<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

Route::get('/customer', [CustomerController::class, 'index'])->name('customer');

Route::post('/storecustomer', [CustomerController::class, 'store'])->name('storecustomer');


