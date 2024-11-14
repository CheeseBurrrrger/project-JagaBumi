<?php

use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/vision', function () {
    return view('vision');
});
Route::get('/pe', function () {
    return view('personalemission');
});
Route::get('/login', function () {
    return view('loginpage');
});
Route::get('/ve', [VehicleController::class,'loadAllVehicle']);
Route::get('/nv', function () {
    return view('vehicle.newvehicle');
});
Route::post('/nv/vehicle',[VehicleController::class,'addVehicle'])->name('addVehicle');
// Route::post('/nv/edit/',[VehicleController::class,'editVehicle'])->name('editVehicle');
// Route::get('/edit/{id}',[VehicleController::class,'loadEditVehicle']);

// Route::post('/add-vehicle', [VehicleController::class, 'addVehicle'])->name('addVehicle');
Route::get('/ve/edit/{id}', [VehicleController::class,'loadEditVehicle'])->name('vehicle.edit');
Route::post('/ve/update/{id}', [VehicleController::class,'updateVehicle'])->name('vehicle.update');
Route::post('/ve/delete/{id}', [VehicleController::class,'deleteVehicle'])->name('vehicle.delete');
Route::get('/calculate', function () {
    return view('vehicle.calculatevehicleemission');
});

Route::get('auth/google',[GoogleAuthController::class,'redirect'])->name('google-auth');
Route::get('auth/google/call-back',[GoogleAuthController::class,'callbackGoogle']);