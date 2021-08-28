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



Route::get('/youtubers', 'YoutubersController@youtube');
Route::get('/about', 'YoutubersController@about');
Route::get('/learningapps', 'YoutubersController@learningapps');
Route::get('/schools', 'YoutubersController@schools');
Route::get('/interviews', 'YoutubersController@interviews');
Route::get('/regi', 'YoutubersController@regi');


Route::get('/comedyyoutubers', 'YoutubersController@comedyyoutubers');
Route::get('/prettyyoutubers', 'YoutubersController@prettyyoutubers');
Route::get('/handsomeyoutubers', 'YoutubersController@handsomeyoutubers');
Route::get('/jlptyoutubers', 'YoutubersController@jlptyoutubers');
Route::get('/conversationyoutubers', 'YoutubersController@conversationyoutubers');
Route::get('/animeyoutubers', 'YoutubersController@animeyoutubers');





Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'YoutubersController@index');
Route::post('/settubes', 'YoutubersController@setyoutubes');


