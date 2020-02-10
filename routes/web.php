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
Route::get('/show/{$id}', 'NewsController@show')->name('news.getIndex/{$id}');
Route::get('/news', 'NewsController@create')->name('news');
Route::post('/news', 'NewsController@store')->name('news.store');
Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/store', 'LoginController@store')->name('login.store');
Route::get('logout', 'LoginController@logout')->name('logout');
Route::get('/registro', 'RegisterController@index')->name('registro');
Route::post('/registro', 'RegisterController@store')->name('registro.store');

