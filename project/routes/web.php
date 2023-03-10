<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/',[\App\Http\Controllers\ClientController::class, 'index']);
Route::post('/manager', [\App\Http\Controllers\ClientController::class, 'sendRequest'])->name('sendRequest');
Route::get('/login',[\App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login_process',[\App\Http\Controllers\AuthController::class, 'login'])->name('login_process');
