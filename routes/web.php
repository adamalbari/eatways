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

Route::group(['middleware' => 'RequireLogin'], function(){
    Route::get('/bagikan-resep', 'RecipeController@index')->name('bagikan-resep');
    Route::get('/belanja', 'RecipeController@index')->name('belanja.index');
});

Route::get('/login', function () {
    return view('login', ['pageTitle' => 'Login']);
});

Route::get('/register', function () {
    return view('register', ['pageTitle' => 'Register']);
});

Route::get('/home', function () {
    return view('home', ['pageTitle' => 'Home']);
});

Route::get('/resep', function () {
    return view('resep', ['pageTitle' => 'Resep Makanan']);
});

Route::get('/tips', function () {
    return view('tips', ['pageTitle' => 'Tips']);
});

Route::get('/kuliner', function () {
    return view('kuliner', ['pageTitle' => 'Kuliner']);
});

Route::get('/tips2', function () {
    return view('tips2', ['pageTitle' => 'Tips 2']);
});

Route::get('/kuliner2', function () {
    return view('kuliner2', ['pageTitle' => 'Kuliner 2']);
});
Route::get('/signup', 'SignupController@create')->name('signup.create');

Route::get('/belanja', function () {
    return view('belanja', ['pageTitle' => 'belanja']);
});

Route::get('/pindang', function () {
    return view('pindang', ['pageTitle' => 'pindang']);
});

Route::get('/sateayam', function () {
    return view('sateayam', ['pageTitle' => 'sateayam']);
});

Route::get('/nasgor', function () {
    return view('nasgor', ['pageTitle' => 'nasgor']);
});

Route::get('/miayam', function () {
    return view('miayam', ['pageTitle' => 'miayam']);
});

Route::get('/tipsdapur', function () {
    return view('tipsdapur', ['pageTitle' => 'tipsdapur']);
});

Route::get('/tipspisau', function () {
    return view('tipspisau', ['pageTitle' => 'tipspisau']);
});

Route::get('/tipsbahan', function () {
    return view('tipsbahan', ['pageTitle' => 'tipsbahan']);
});

Route::get('/sushi', function () {
    return view('sushi', ['pageTitle' => 'sushi']);
});

Route::get('/tambahresep', function () {
    return view('tambahresep', ['pageTitle' => 'tambahresep']);
});

Route::get('/pizza', function () {
    return view('pizza', ['pageTitle' => 'pizza']);
});