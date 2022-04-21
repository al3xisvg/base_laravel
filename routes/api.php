<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
  return $request->user();
});

Route::prefix('v1')->group(function() {
  
  Route::prefix('/user')->group(function() {
    Route::controller(UserController::class)->group(function () {
      Route::post('/list', 'list');
      Route::get('/list-datatable', 'dtTable');
      Route::get('/obtain/{id}', 'obtain');
    });
  });

});
