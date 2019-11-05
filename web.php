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

// Route::get('/', function () {
//     return view('website-goSport');
// });


// Route::get('/about', function () {
//     $nama = 'ini project PBO';
//     return view('about' , ['tentang' => $nama]);
// });

Route::get('/', 'PagesController1@home');
Route::get('/about', 'PagesController1@about');

//untuk booking
Route::get('/booking', 'BookingController@index');

//booking data
Route::get('/orders', 'OrderanController@index');
Route::get('/orders/create', 'OrderanController@create');
Route::get('/orders/{order}', 'OrderanController@show');