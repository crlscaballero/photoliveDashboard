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

//Route::get('/client', 'clientController@index');
Route::get('/client', 'clientController@index');
Route::post('/client', 'clientController@store');

Route::get('event', function () {
    return view('event');
});

Route::get('photo', function () {
    return view('photo');
});

Route::get('frame', function () {
    return view('frame');
});

Route::get('contact', function () {
    return view('contact');
});


