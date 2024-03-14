<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConferenceController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\CityController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Se registran las rutas para los recursos de las conferencias, divisiones, equipos y ciudades.
Route::resource('/conferences', ConferenceController::class);
Route::resource('/divisions', DivisionController::class);
Route::resource('/teams', TeamController::class);
Route::resource('/cities', CityController::class);
