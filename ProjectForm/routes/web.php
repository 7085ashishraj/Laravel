<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/submit', function () {
//     return view('user');
// });

// Route::post('/submit', function () {

//     return "Form submitted successfully!";
// });

// use Illuminate\Http\Request;
// Route::post('/submit', function (Request $request) {
//     $name = $request->input('name');
//     $email = $request->input('email');
//     $city = $request->input('city');
//     $contact = $request->input('contact');

//     // You can perform any necessary processing with the form data here

//     return view("result", compact('name', 'email', 'city', 'contact'));
// });

use App\Http\Controllers\userController;
// Route::get('/user', [userController::class, 'user']);
// Route::post('/submit', [userController::class, 'submit']);
Route::get('/user1', [userController::class, 'user1']);
Route::post('/inputdata', [userController::class, 'inputdata']);
Route::get('/inputdata', function () {
    return redirect('/user1');
});

use App\Http\Controllers\StudentController;
Route::get('/students', [StudentController::class, 'show']);
Route::post('/stdsubmit', [StudentController::class, 'store']);


