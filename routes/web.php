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

Route::get('/Accommodation', [
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


Route::get('/Habitación-Familiar', [
	'uses' => 'PublicController@familiar',
	'as' =>'familiar'
]);


Route::get('/Habitación-Duplex', [
	'uses' => 'PublicController@duplex',
	'as' =>'duplex'
]);
















Route::get('/Gallery', [
	'uses' => 'PublicController@gallery',
	'as' =>'gallery'
]);

Auth::routes();

Route::get('/home', 'HomeController@index');
