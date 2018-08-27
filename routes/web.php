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

Route::get('/Habitación-Suite', [
	'uses' => 'PublicController@suite',
	'as' =>'suite'
]);

Route::get('/Habitación-Doble', [
	'uses' => 'PublicController@doble',
	'as' =>'doble'
]);

Route::get('/Habitación-Familiar-1-3-Pax-2-Ambientes', [
	'uses' => 'PublicController@familiar',
	'as' =>'familiar'
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

Route::get('/Trabaja-con-Nosotros', [
	'uses' => 'PublicController@trabaja',
	'as' =>'trabaja'
]);

Route::put('Enviando-CV', [
		'uses' => 'PublicController@enviarTrabaja',
		'as' =>'enviarTrabaja'
]);	

Auth::routes();

//Route::get('/home', 'HomeController@index');

Route::get('/Solicitar-Reservación', [
	//'uses' => 'HomeController@getReservaciones',
	'uses' => 'PublicController@getReservaciones',
	'as' =>'reservar'
]);

Route::post('/Solicitar-Reservación', 'HomeController@postReservaciones');

//Para pagar la reservación
Route::get('/Pagar-Reservación/{codigo}', [
	'uses' => 'HomeController@realizarPago',
	'as' =>'realizarPago'
]);

Route::get('/en/Make-Payment/{codigo}', [
	'uses' => 'HomeController@realizarPago',
	'as' =>'realizarPagoIngles'
]);


//Para pagar la reservación
Route::post('/Pagar-Reservación-Stripe', [
	'uses' => 'HomeController@realizarPagoStripe',
	'as' =>'realizarPagoStripe'
]);

Route::get('/Reservación-Pagada-Exitosamente/{codigo}', [
	'uses' => 'HomeController@pagoStripe',
	'as' =>'pagoStripe'
]);

Route::get('/Reservation-Paid-Successfully/{codigo}', [
	'uses' => 'HomeController@pagoStripe',
	'as' =>'pagoStripe'
]);

/********************************************/
/*
//Aquí me direcciona 2CO
Route::get('/Pago-Exitoso', [
	'uses' => 'HomeController@pagado',
	'as' =>'pagado'
]);


Route::get('/Reservacion-Pagada/{codigo}', [
	'uses' => 'HomeController@pago',
	'as' =>'pago'
]);
*/
/********************************************/

Route::get('Salir', [
				'uses' => 'Auth\LoginController@logout',
				'as' =>'logout'
]);

//Login con twitter, facebook y google:
Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');