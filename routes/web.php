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

//WEB
Route::get('/', 'HomeController@index')->name('modulo.web.index');



//LOGIN
Route::get('/web-admin', 'Modulos\Auth\LoginController@index')->name('modulo.login.index');
Route::post('/web-admin', 'Modulos\Auth\LoginController@login')->name('modulo.login.acceso');
Route::get('/administrador', 'AdministradorController@index')->name('modulo.administrador.index');

//SESSION LOGOUT
Route::post('/logout', 'Modulos\Auth\LoginController@logout')->name('modulo.login.logout');
