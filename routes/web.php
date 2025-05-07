<?php


use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

Route::get('/employee', [EmployeeController::class,'index']);
Route::get('/employee/create', [EmployeeController::class,'create']);
Route::get('/employee/{id}', [EmployeeController::class,'edit']);
Route::post('/employee', [EmployeeController::class,'store']);
Route::put('/employee/{id}', [EmployeeController::class,'update']);
Route::delete('/employee/{id}', [EmployeeController::class,'destroy']);


// Route::get('province', [IndonesiaController::class,'province'])->name('province.index');
// Route::get('city/{id}', [IndonesiaController::class,'city']);
// Route::get('district/{id}', [IndonesiaController::class,'district']);
// Route::get('village/{id}', [IndonesiaController::class,'village']);


