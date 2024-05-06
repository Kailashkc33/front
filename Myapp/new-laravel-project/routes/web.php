<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/QuizMasterPro', function () {
    return view('QuizMasterPro');
});

Route::get('/loginpage', function () {
    return view('loginpage');
});

Route::get('/loginbs', function () {
    return view('loginbs');
});
Route::get('/adminpage', function () {
    return view('adminpage');
});
Route::get('/Creatorpage', function () {
    return view('Creatorpage');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/category', function () {
    return view('category');
});
Route::get('/mode', function () {
    return view('mode');
});
Route::get('/questions', function () {
    return view('questions');
});
Route::get('/forgotpw', function () {
    return view('forgotpw');
});
Route::get('/verification', function () {
    return view('verification');
});
Route::get('/changedpw', function () {
    return view('changedpw');
});
Route::get('/registration', function () {
    return view('registration');
});

