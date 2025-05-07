<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\IndonesiaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

Route::get('/employee', [EmployeeController::class,'index']);
// Route::get('/customer/create', [CustomerController::class,'create']);
// Route::get('/customer/{id}', [CustomerController::class,'edit']);
// Route::post('/customer', [CustomerController::class,'store']);
// Route::put('/customer/{id}', [CustomerController::class,'update']);
// Route::delete('/customer/{id}', [CustomerController::class,'destroy']);


// Route::get('province', [IndonesiaController::class,'province'])->name('province.index');
// Route::get('city/{id}', [IndonesiaController::class,'city']);
// Route::get('district/{id}', [IndonesiaController::class,'district']);
// Route::get('village/{id}', [IndonesiaController::class,'village']);


