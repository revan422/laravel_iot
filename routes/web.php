<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SensorController;

Route::get('/', function () {
    return redirect('/sensor');
});

Route::get('/sensor', [SensorController::class, 'index'])->name('sensor.index');
Route::get('/sensor/create', [SensorController::class, 'create'])->name('sensor.create');
Route::post('/sensor/store', [SensorController::class, 'store'])->name('sensor.store');
Route::put('/sensor/update/{id}', [SensorController::class, 'update']);
Route::delete('/sensor/sensor/{id}', [SensorController::class, 'sensor']);