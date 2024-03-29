<?php

use App\Http\Controllers\AkunController;
use App\Http\Controllers\CoverController;
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



Route::get('/', [AkunController::class, 'index']);
Route::post('login', [AkunController::class, 'login']);
Route::get('cover', [CoverController::class, 'index']);