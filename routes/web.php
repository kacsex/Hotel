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
    return view('home', ['title' => '', 'breadcrumb' => '']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Us', 'breadcrumb' => 'about']);
});

Route::get('/rooms', 'RoomController@rooms');

Route::get('/dining', function () {
    return view('dining', ['title' => 'Discover Our Menus', 'breadcrumb' => 'dining']);
});

Route::get('/amenities', 'RoomController@roomsBusiness');

Route::get('/booking', function () {
    return view('booking', ['title' => 'Booking', 'breadcrumb' => 'booking']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Us', 'breadcrumb' => 'contact']);
});


Route::get('home', 'HomeController@home');
Route::get('home/search', 'HomeController@roomsSearch');




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
