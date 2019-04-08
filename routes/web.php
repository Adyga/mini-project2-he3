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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about','HomeController@about')->name('about');
Route::get('/first','HomeController@first')->name('first');
Route::get('/second','HomeController@second')->name('second');
Route::get('/last','HomeController@last')->name('last');
Route::get('/contact','HomeController@contact')->name('contact');

Route::get('/profile', 'ProfileController@profile')->name('profile');
