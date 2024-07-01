<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SensorController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Di sini Anda bisa mendaftarkan web routes untuk aplikasi Anda. Routes ini
| dimuat oleh RouteServiceProvider dalam sebuah grup yang berisi middleware "web".
| Sekarang buatlah sesuatu yang hebat!
|
*/

Route::get('/', [App\Http\Controllers\SensorController::class, 'index'])->name('index');
Route::get('/get', [App\Http\Controllers\SensorController::class, 'get'])->name('get');
Auth::routes();
Route::get('/sensor/{idAlat}/{dropsPerMinutes}/{kapasitas}/{status}', [App\Http\Controllers\SensorController::class, 'sensor']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth')->name('home');
Route::get('/regist', [App\Http\Controllers\Regist::class, 'index'])->name('regist');
Route::post('/register', [App\Http\Controllers\Regist::class, 'create'])->name('register');
Route::get('/adddevice', [App\Http\Controllers\AddDeviceController::class, 'index'])->middleware('auth')->name('adddevice');
Route::get('updates', [App\Http\Controllers\UpdateController::class, 'index'])->middleware('auth')->name('updates');
Route::post('update', [App\Http\Controllers\UpdateController::class, 'update']);
Route::post('adddevices', [App\Http\Controllers\AddDeviceController::class, 'post']);
Route::get('/device', [App\Http\Controllers\AddDeviceController::class, 'list'])->middleware('auth')->name('device');
Route::get('deletedevice/{id}', [App\Http\Controllers\UpdateController::class, 'delete']);