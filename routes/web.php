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

Route::get('/', function () {
    return view('home');
});
Route::get('home', 'HomeController@home');
Route::get('about', 'HomeController@about');
Route::get('rooms', 'HomeController@rooms');
Route::get('dining', 'HomeController@dining');
Route::get('booking', 'HomeController@booking');
Route::get('amenities', 'HomeController@amenities');
Route::get('contact', 'HomeController@contact');

