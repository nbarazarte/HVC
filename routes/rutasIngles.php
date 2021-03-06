<?php

Route::get('/', [
	'uses' => 'PublicControllerIngles@index',
	'as' =>'homeIngles'
]);

Route::get('/About', [
	'uses' => 'PublicControllerIngles@about',
	'as' =>'aboutIngles'
]);

Route::get('/Restaurant', [
	'uses' => 'PublicControllerIngles@restaurant',
	'as' =>'restaurantIngles'
]);

Route::get('/Member-Service', [
	'uses' => 'PublicControllerIngles@socios',
	'as' =>'sociosIngles'
]);

Route::put('Sending', [
		'uses' => 'PublicControllerIngles@enviar',
		'as' =>'enviarIngles'
]);

Route::put('Sending-Reservation', [
		'uses' => 'PublicControllerIngles@enviarReservacion',
		'as' =>'enviarReservacionIngles'
]);

Route::get('/Partner-RCI', [
	'uses' => 'PublicControllerIngles@rci',
	'as' =>'rciIngles'
]);

Route::get('/Fly&Buy', [
	'uses' => 'PublicControllerIngles@fly',
	'as' =>'flyIngles'
]);

Route::get('/Social-and-Corporate-Events', [
	'uses' => 'PublicControllerIngles@eventos',
	'as' =>'eventosIngles'
]);

Route::get('/Accommodation', [
	'uses' => 'PublicControllerIngles@accommodation',
	'as' =>'accommodationIngles'
]);

Route::get('/Matrimonial-Room', [
	'uses' => 'PublicControllerIngles@matrimonial',
	'as' =>'matrimonialIngles'
]);

Route::get('/Suite-Room', [
	'uses' => 'PublicControllerIngles@suite',
	'as' =>'suiteIngles'
]);

Route::get('/Double-Room', [
	'uses' => 'PublicControllerIngles@doble',
	'as' =>'dobleIngles'
]);

Route::get('/Family-1-3-Pax-2-Main-Room', [
	'uses' => 'PublicControllerIngles@familiar',
	'as' =>'familiarIngles'
]);

Route::get('/Gallery', [
	'uses' => 'PublicControllerIngles@gallery',
	'as' =>'galleryIngles'
]);

Route::post('/', [
	'uses' => 'PublicControllerIngles@reservacion',
	'as' =>'reservacionIngles'
]);

Route::get('/Contact-us', [
	'uses' => 'PublicControllerIngles@contact',
	'as' =>'contactIngles'
]);

Route::post('/Contact-us', 'PublicController@solicitarReservacion');

Route::get('/Special-Services', [
	'uses' => 'PublicControllerIngles@especial',
	'as' =>'especialIngles'
]);

Route::post('/Newsletter', [
	'uses' => 'PublicControllerIngles@postNewsletter',
	'as' =>'newsletterIngles'
]);

Route::get('/Page-No-Exist', [
	'uses' => 'PublicControllerIngles@error',
	'as' =>'errorIngles'
]);


Route::get('/Booking-Online', [
	//'uses' => 'HomeController@getReservaciones',
	'uses' => 'PublicController@getReservaciones',	
	'as' =>'reservarIngles'
]);

Route::post('/Booking-Online', 'HomeController@postReservaciones');

?>