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

Route::get('/', [
	'uses' => 'PublicController@index',
	'as' =>'home'
]);

Route::get('/HVC', [
	'uses' => 'PublicController@about',
	'as' =>'about'
]);

Route::get('/Restaurant', [
	'uses' => 'PublicController@restaurant',
	'as' =>'restaurant'
]);

Route::get('/Atención-al-Socio', [
	'uses' => 'PublicController@socios',
	'as' =>'socios'
]);

Route::put('Enviando', [
		'uses' => 'PublicController@enviar',
		'as' =>'enviar'
]);

Route::put('Enviando-Reservación', [
		'uses' => 'PublicController@enviarReservacion',
		'as' =>'enviarReservacion'
]);

Route::get('/RCI', [
	'uses' => 'PublicController@rci',
	'as' =>'rci'
]);

Route::get('/Fly&Buy', [
	'uses' => 'PublicController@fly',
	'as' =>'fly'
]);

Route::get('/Eventos', [
	'uses' => 'PublicController@eventos',
	'as' =>'eventos'
]);

Route::get('/Habitaciones', [
	'uses' => 'PublicController@accommodation',
	'as' =>'accommodation'
]);

Route::get('/Habitación-Matrimonial', [
	'uses' => 'PublicController@matrimonial',
	'as' =>'matrimonial'
]);

Route::get('/Habitación-Matrimonial-Sofá', [
	'uses' => 'PublicController@matrimonialSofa',
	'as' =>'matrimonialSofa'
]);

Route::get('/Habitación-Doble', [
	'uses' => 'PublicController@doble',
	'as' =>'doble'
]);

Route::get('/Habitación-Duplex', [
	'uses' => 'PublicController@duplex',
	'as' =>'duplex'
]);

Route::get('/Galería', [
	'uses' => 'PublicController@gallery',
	'as' =>'gallery'
]);

Route::post('/Contáctanos', [
	'uses' => 'PublicController@reservacion',
	'as' =>'reservacion'
]);

Route::get('/Contáctanos', [
	'uses' => 'PublicController@contact',
	'as' =>'contact'
]);

Route::get('/Servicios', [
	'uses' => 'PublicController@especial',
	'as' =>'especial'
]);

Route::post('/Newsletter', [
	'uses' => 'PublicController@postNewsletter',
	'as' =>'newsletter'
]);

Route::get('/Error', [
	'uses' => 'PublicController@error',
	'as' =>'error'
]);

Route::get('/Suscripción-Realizada', [
	'uses' => 'PublicController@suscripcion',
	'as' =>'suscripcion'
]);

Route::get('/Suscripción-Fallida', [
	'uses' => 'PublicController@suscripcionfallida',
	'as' =>'suscripcionFallida'
]);

Auth::routes();

Route::get('/home', 'HomeController@index');