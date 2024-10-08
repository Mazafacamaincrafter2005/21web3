<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;


Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('/register',[AuthController::class,'show_signup'])->name('show_signup');
Route::post('/register',[AuthController::class,'signup'])->name('signup');
route::get('/login',[AuthController::class,'show_signin'])->name('show_signin');
route::post('/login',[AuthController::class,'login'])->name('signin');