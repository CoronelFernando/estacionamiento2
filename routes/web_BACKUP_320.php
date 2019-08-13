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

/*Route::get('/', function () {
    return view('welcome');
});*/

//paginal principal
//Route::get('home', 'CajonController@index');
Route::get('/', 'PrincipalController@index');
Route::get('home', 'PrincipalController@index');


//Estadisticas
//Route::get('/', 'EstadisticaCajonController@index');
Route::get('estadisticas', 'EstadisticaCajonController@index');

<<<<<<< HEAD
//Reservados
Route::get('reservados', 'ReservadoController@index');
=======
//Reservaciones 
Route::get('reservados', 'ReservadoController@index');

//Configuraciones
Route::get('configuracion', 'ConfiguracionController@index');
>>>>>>> 43d873d64241473a62815b744623d076bfb89d17
