<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OtherController;

Route::get('/', function () {
  return view('welcome');
})->middleware('guest');

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/home', HomeController::class)->name('home')->middleware('auth');
Route::get('/other', OtherController::class)->name('other')->middleware('auth');
