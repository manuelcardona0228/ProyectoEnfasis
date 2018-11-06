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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/homeAd', 'HomeAdminController@inicio');

Route::resource('cargos','CargoController');

Route::resource('admins', 'AdminController');

Route::resource('barberos', 'BarberoController');

Route::resource('usuarios', 'UsuarioController');

Route::resource('barberias', 'BarberiaController');

Route::resource('users', 'UserController');

Route::resource('sedes', 'SedeController');

Route::resource('galerias', 'GaleriaController');

Route::resource('turnos', 'TurnoController');

Route::resource('servicios', 'ServicioController');

