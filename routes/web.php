<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('home');
});

Route::get('/login',[LoginController::class,'index']);
Route::post('/check-login',[LoginController::class,'checkLogin']);
Route::get('/logout',[LoginController::class,'logout']);
