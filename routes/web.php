<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/profiles', function () {
    return view('profiles');
});

Route::get('/abstracts', function () {
    return view('abstracts');
});


Route::get('/payments', function () {
    return view('payments');
});


Route::get('/arrests', function () {
    return view('arrests');
});


Route::get('/porfolio', function () {
    return view('portfolio');
});

