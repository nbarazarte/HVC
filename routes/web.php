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

Route::group(['prefix' => '/en/'], function () {
	
	include('rutasIngles.php');

});

Route::get('/', [
	'uses' => 'PublicController@index',
	'as' =>'home'
]);

Route::get('/Nosotros', [
	'uses' => 'PublicController@about',
	'as' =>'about'
]);

Route::get('/Restaurante', [
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

Route::get('/Socio-RCI', [
	'uses' => 'PublicController@rci',
	'as' =>'rci'
]);

Route::get('/Fly&Buy', [
	'uses' => 'PublicController@fly',
	'as' =>'fly'
]);

Route::get('/Eventos-Sociales-y-Corporativos', [
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

Route::get('/Habitación-Duplex-2-Ambientes', [
	'uses' => 'PublicController@duplex',
	'as' =>'duplex'
]);

Route::get('/Galería', [
	'uses' => 'PublicController@gallery',
	'as' =>'gallery'
]);

Route::post('/', [
	'uses' => 'PublicController@reservacion',
	'as' =>'reservacion'
]);

Route::get('/Contáctanos', [
	'uses' => 'PublicController@contact',
	'as' =>'contact'
]);

Route::post('/Contáctanos', 'PublicController@solicitarReservacion');

Route::get('/Servicios-Especiales', [
	'uses' => 'PublicController@especial',
	'as' =>'especial'
]);

Route::post('/Boletin', [
	'uses' => 'PublicController@postNewsletter',
	'as' =>'newsletter'
]);

Route::get('/Página-No-Existe', [
	'uses' => 'PublicController@error',
	'as' =>'error'
]);

Auth::routes();

//Route::get('/home', 'HomeController@index');

Route::get('/Solicitar-Reservación', [
	'uses' => 'HomeController@getReservaciones',
	'as' =>'reservar'
]);

Route::post('/Solicitar-Reservación', 'HomeController@postReservaciones');

//Para pagar la reservación
Route::get('/Pagar-Reservación/{codigo}', [
	'uses' => 'HomeController@realizarPago',
	'as' =>'realizarPago'
]);

Route::get('/Make-Payment/{codigo}', [
	'uses' => 'HomeController@realizarPago',
	'as' =>'realizarPagoIngles'
]);
/********************************************/

//Aquí me direcciona 2CO
Route::get('/Pago-Exitoso', [
	'uses' => 'HomeController@pagado',
	'as' =>'pagado'
]);
/********************************************/

Route::get('/Reservacion-Pagada/{codigo}', [
	'uses' => 'HomeController@pago',
	'as' =>'pago'
]);

Route::get('Salir', [
				'uses' => 'Auth\LoginController@logout',
				'as' =>'logout'
]);

//Rutas de Socialite (aún en desarrollo)
Route::get('/redirect','SocialController@redirect');
Route::get('/callback','SocialController@callback');