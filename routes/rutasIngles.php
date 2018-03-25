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

Route::get('/Attention-to-Partner', [
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

Route::get('/Events', [
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

Route::get('/Matrimonial-Room-Sofa', [
	'uses' => 'PublicControllerIngles@matrimonialSofa',
	'as' =>'matrimonialSofaIngles'
]);

Route::get('/Double-Room', [
	'uses' => 'PublicControllerIngles@doble',
	'as' =>'dobleIngles'
]);

Route::get('/Duplex-Room', [
	'uses' => 'PublicControllerIngles@duplex',
	'as' =>'duplexIngles'
]);

Route::get('/Gallery', [
	'uses' => 'PublicControllerIngles@gallery',
	'as' =>'galleryIngles'
]);

Route::post('/Contact', [
	'uses' => 'PublicControllerIngles@reservacion',
	'as' =>'reservacionIngles'
]);

Route::get('/Contact-us', [
	'uses' => 'PublicControllerIngles@contact',
	'as' =>'contactIngles'
]);

Route::get('/Services', [
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

Route::get('/Pay-Reservation', [
	'uses' => 'PublicControllerIngles@realizarPagoIngles',
	'as' =>'realizarPagoIngles'
]);

?>