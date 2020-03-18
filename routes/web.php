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

    Route::get('/usuario/{id}', 'UserController@show')->name('usuario.show');
    Route::get('/registro', 'UserController@create')->name('usuario.create');
    Route::post('/registro', 'UserController@store')->name('usuario.store');
    Route::get('/usuario/{id}/edit', 'UserController@edit')->name('usuario.edit');
    Route::put('/usuario/{id}', 'UserController@update')->name('usuario.update');
    Route::delete('/usuario/{id}', 'UserController@destroy')->name('usuario.destroy');

    Route::get('/contato/listar', 'ContactController@list')->name('contato.list');

    Route::get('/news/{id}/edit', 'NewsController@edit')->name('news.edit');
    Route::put('/news/{id}', 'NewsController@update')->name('news.update');
    Route::delete('/news/{id}', 'NewsController@destroy')->name('news.destroy');
    Route::get('/news', 'NewsController@create')->name('news');
    Route::post('/news', 'NewsController@store')->name('news.store');
    Route::get('/news/lista', 'ListController@news')->name('list.news');
    Route::get('institutos/lista', 'ListController@institute')->name('list.institute');
    Route::get('projetos/lista', 'ListController@projets')->name('list.project');
    Route::get('usuarios/lista', 'ListController@user')->name('list.user');
    Route::get('categorias/lista', 'ListController@category')->name('list.category');
    Route::get('categoria/create', 'CategoryController@create')->name('category.create');
    Route::post('/categoria', 'CategoryController@store')->name('category.store');
    Route::get('/categoria/{id}/edit', 'CategoryController@edit')->name('category.edit');
    Route::put('/categoria/{id}', 'CategoryController@update')->name('category.update');
    Route::delete('/categoria/{id}', 'CategoryController@destroy')->name('category.destroy');
});
Route::get('/dashboard', 'Dashboard@index')->name('dashboard');

Route::get('logout', 'LoginController@logout')->middleware('auth')->name('login.logout');
Route::get('/', 'NewsController@index')->name('news.index');
Route::get('/news/{slug}', 'NewsController@show')->name('news.show');

Route::get('/login', 'LoginController@index')->name('login');
Route::post('/store', 'LoginController@store')->name('login.store');

Route::resource('/institutos', 'InstituteController', [

])->middleware(['auth', 'user.admin']);

Route::resource('/projetos', 'ProjectsController');

Route::resource('/institucional', 'QuemSomosController');

Route::resource('/rede-social', 'SocialNetworkController')->middleware(['user.admin', 'auth'])->except([
    'index', 'show'
]);

Route::get('/contato', 'ContactController@index')->name('contato.index');
Route::post('/contato', 'ContactController@store')->name('contato.store');

Route::any('/serach/news', 'SerachController@news')->name('serach.news');
Route::any('/serach/institutes', 'SerachController@institutes')->name('serach.institutes');
Route::any('/serach/projects', 'SerachController@projects')->name('serach.projects');
Route::any('/serach/category', 'SerachController@category')->name('serach.category');

Route::get('/recuperar', 'ForgetPasswordController@index')->name('forget');
Route::post('/recuperar', 'ForgetPasswordController@store')->name('forget.store');
Route::get('/recuperar-senha', 'ForgetPasswordController@edit')->name('forget.edit');
Route::put('/recuperar-senha' , 'ForgetPasswordController@update' )->name('forget.update');

