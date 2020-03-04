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

use App\Contact;
use App\Mail\SendMailContact;


// Route::middleware(['user.admin'])->group(function () {

Route::group(['middleware' => ['auth', 'user.admin']], function () {
    Route::get('/registro', 'RegisterController@create')->name('registro');
    Route::get('/registro', 'RegisterController@create')->name('registro');
    Route::post('/registro', 'RegisterController@store')->name('registro.store');
    Route::get('/contato/listar', 'ContactController@list')->name('contato.list');
    Route::get('/news/{id}/edit', 'NewsController@edit')->name('news.edit');
    Route::put('/news/{id}', 'NewsController@update')->name('news.update');
    Route::delete('/news/{id}', 'NewsController@destroy')->name('news.destroy');
    Route::get('/news', 'NewsController@create')->name('news');
    Route::post('/news', 'NewsController@store')->name('news.store');
});
Route::get('/dashboard', 'Dashboard@index')->name('dashboard');

Route::get('logout', 'LoginController@logout')->middleware('auth')->name('login.logout');
Route::get('/', 'NewsController@index')->name('news.index');
Route::get('/news/{id}', 'NewsController@show')->name('news.show');

Route::get('/login', 'LoginController@index')->name('login');
Route::post('/store', 'LoginController@store')->name('login.store');

Route::resource('/institutos', 'InstituteController')->middleware(['user.admin', 'auth'])->except([
    'index', 'show'
]);

Route::resource('/projetos', 'ProjectsController')->middleware(['user.admin', 'auth'])->except([
    'index', 'show'
]);

Route::resource('/institucional', 'QuemSomosController')->middleware(['user.admin', 'auth'])->except([
    'index', 'show'
]);

Route::resource('/rede-social', 'SocialNetworkController')->middleware(['user.admin', 'auth'])->except([
    'index', 'show'
]);

Route::get('/contato', 'ContactController@index')->name('contato.index');
Route::post('/contato', 'ContactController@store')->name('contato.store');

Route::get('/erro404', function() {
    return view('erros.erro404');
});
Route::get('/perfil', 'ProfileController@create')->name('perfil');
Route::post('/perfil', 'ProfileController@store')->name('perfil.store');
Route::get('/perfil/{id}', 'ProfileController@show')->name('perfil.show');
Route::delete('/perfil/destruir', 'ProfileController@destroy')->name('perfil.destroy');

Route::get('/perfil/{id}/edit', 'ProfileController@edit')->name('perfil.edit');
Route::put('/perfil/{id}', 'ProfileController@update')->name('perfil.update');

Route::get('/recuperar', 'ForgetPasswordController@index')->name('forget');
Route::post('/recuperar', 'ForgetPasswordController@store')->name('forget.store');
Route::get('/recuperar-senha', 'ForgetPasswordController@edit')->name('forget.edit');
Route::put('/recuperar-senha' , 'ForgetPasswordController@update' )->name('forget.update');

