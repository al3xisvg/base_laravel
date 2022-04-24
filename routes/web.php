<?php

// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

/* Route::post('/login', function () {
  $credentials = request()->only('email', 'password');

  if (Auth::attempt($credentials)) {
    return 'Logged!';
  }

  return 'Login failed';
});*/

Route::get('/home', HomeController::class)->name('home');
