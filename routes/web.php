<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MonedaController;
use App\Http\Controllers\BackendMonedaController;
use App\Http\Controllers\IndexController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//frontend
Route::resource('/', MonedaController::class)->only('index');

//backend
Route::resource('backend/moneda', BackendMonedaController::class, ['names' => 'backend.moneda']);
//método dentro del controlador de recursos de backend
Route::get('backend', [BackendMonedaController::class, 'main'])->name('backend.main');


//fallback
Route::fallback([MonedaController::class, 'fallback'])->name('fallback');