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
Route::get('/','NewsController@index')->name('news.index');
Route::get('/news/{id}', 'NewsController@show')->name('news.show');
Route::get('/news/{id}/edit', 'NewsController@edit')->name('news.edit');
Route::put('/news/{id}', 'NewsController@update')->name('news.update');
Route::get('/news', 'NewsController@create')->name('news');
Route::post('/news', 'NewsController@store')->name('news.store');
Route::delete('/news/{id}', 'NewsController@destroy')->name('news.destroy');

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/store', 'LoginController@store')->name('login.store');
Route::get('logout', 'LoginController@logout')->name('logout');

Route::get('/registro', 'RegisterController@index')->name('registro');
Route::post('/registro', 'RegisterController@store')->name('registro.store');

