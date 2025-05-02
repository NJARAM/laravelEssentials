<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\GreetingController;

Route::get('/',[WelcomeController::class,'index']);

Route::get('/hello',[GreetingController::class,'index']);

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

