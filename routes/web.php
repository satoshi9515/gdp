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


Route::get('/', 'YoutubersController@index');
Route::get('/youtubers', 'YoutubersController@youtube');
Route::get('/about', 'YoutubersController@about');
Route::get('/learningapps', 'YoutubersController@learningapps');
Route::get('/schools', 'YoutubersController@schools');
Route::get('/interviews', 'YoutubersController@interviews');

// Route::post('youtubers', 'YoutubersController@store');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


