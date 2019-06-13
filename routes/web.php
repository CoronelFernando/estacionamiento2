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

//RUTAS USADAS PARA ADMINISTRADOR
Route::get('home', 'CajonController@index');


//RUTAS USADAS PARA USUARIOS
Route::get('usuario/home', 'PrincipalController@index');
