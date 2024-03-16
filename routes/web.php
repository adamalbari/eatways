<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/resep', function () {
    return view('resep');
});

Route::get('/tips', function () {
    return view('tips');
});

Route::get('/kuliner', function () {
    return view('kuliner');
});

Route::get('/tips2', function () {
    return view('tips2');
});

Route::get('/kuliner2', function () {
    return view('kuliner2');
});
Route::get('/signup', 'SignupController@create')->name('signup.create');