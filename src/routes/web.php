<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WeightController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login',[UserController::class,'index']);
Route::get('/admin',[WeightController::class,'admin']);
