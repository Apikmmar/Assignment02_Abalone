<?php

use App\Http\Controllers\AbaloneController;
use Illuminate\Support\Facades\Route;

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

Route::resource('/abalonedata', AbaloneController::class);

// Route::get('/abalonedata/filtergender', [AbaloneController::class, 'filterGender']);
// Route::get('/abalonedata', [AbaloneController::class, 'index']);
// Route::get('/abalonedata/create', [AbaloneController::class, 'create']);