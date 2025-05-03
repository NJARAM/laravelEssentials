<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\GreetingController;
use App\Models\student;

// Route::get('/',[WelcomeController::class,'index']);

Route::get('/',function(){
    // 1.  Using raw SQL queries

    // $users=DB::select('select * from users');
    // dd($users);

    // 2. Using Query builders
    // $users=DB::table('users')->select(['name','email'])->whereNotNull('email')->orderBy('name');
    // dd($users);

    //3. Using Eloquent ORM
    //a. $students = Student::all();
    // dd($students);

    //b. $students = Student::all();
    // foreach($students as $student){
    //     echo $student->name."<br>";
    // }

    //c. $students = Student::select(['name','email'])->whereNotNull('email')->orderBy('name');
    // dd($students);

    //d. $students = Student::select(['name','email'])->whereNotNull('email')->orderBy('name');
    // dd($students);

    $student = new Student;
    $student->name="jane";
    $student->email="jane@example.com";
    $student->save();
    
});

Route::get('/hello',[GreetingController::class,'index']);

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

