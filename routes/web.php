<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\GreetingController;

// Route::get('/',[WelcomeController::class,'index']);

Route::get('/',function(){
    // 1.  Using raw SQL queries

    // $users=DB::select('select * from users');
    // dd($users);

    // 2. Using Query builders
    $users=DB::table('users')->select(['name','email'])->whereNotNull('email');
    dd($users);

    //3. Using Eloquent ORM
});

Route::get('/hello',[GreetingController::class,'index']);

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

