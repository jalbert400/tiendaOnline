<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
*/

Route::get('/', function () {
    return view('welcome');
});

//LOGIN
Route::get('/web-admin', 'Modulos\Auth\LoginController@index')->name('modulo.login.index');
Route::post('/web-admin', 'Modulos\Auth\LoginController@login')->name('modulo.login.acceso');
Route::get('/administrador', 'AdministradorController@index')->name('modulo.administrador.index');
