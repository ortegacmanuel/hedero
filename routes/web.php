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
    return view('pages.welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


// Usuarios
Route::get('@{user}', 'UsersController@show')->name('usuarios.show');
Route::get('/editar/@{user}', 'UsersController@edit')->name('usuarios.edit');
