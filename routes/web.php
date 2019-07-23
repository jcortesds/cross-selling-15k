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

Route::get('/allianz-aliado-experto/contacto/{contacto}', function(){
	return View::make('allianz_aliado_experto');
});

Route::post('suscrito', 'SuscripcionController@store')->name('store');

Route::post('email', 'EmailController@send')->name('send');