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
    return view('auth/login');
});
//routes for adv
Route::resource('adv', 'AdvController');


//routes for housing
Route::resource('housing', 'HousingController');

//routes for message
Route::resource('message', 'MessageController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
