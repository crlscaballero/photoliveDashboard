<?php

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

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('dashboard', function() {
	return view('dashboard');
});

Route::get('client', function () {
    return view('client');
});

Route::get('event', function () {
    return view('event');
});

Route::get('photo', function () {
    return view('photo');
});


