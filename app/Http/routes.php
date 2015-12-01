<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

Route::get('inicio', 'HomeController@index');

Route::get('ayuda', 'AyudaController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

//------------------------------------------------------------------------------
//usuarios
Route::group(['middleware' => ['auth', 'solo_admin'], 'namespace' => 'Users'], function () {
	Route::resource('usuarios','UsersController');
});
//------------------------------------------------------------------------------
//------------------------------------------------------------------------------
//categorias
Route::group(['middleware' => 'auth', 'namespace' => 'Categories'], function () {
	Route::resource('categorias','CategoriesController');
});
//------------------------------------------------------------------------------
//------------------------------------------------------------------------------
//marcas
Route::group(['middleware' => 'auth', 'namespace' => 'Brands'], function () {
	Route::resource('marcas','BrandsController');
});
//------------------------------------------------------------------------------
//------------------------------------------------------------------------------
//productos
Route::group(['middleware' => 'auth', 'namespace' => 'Products'], function () {
	Route::resource('productos','ProductsController');
});
//------------------------------------------------------------------------------
//------------------------------------------------------------------------------
//prestamos
Route::group(['middleware' => 'auth', 'namespace' => 'Loans'], function () {
	Route::get('prestamos/complete','LoansController@complete');
	Route::get('prestamos/incomplete','LoansController@incomplete');
	Route::get('prestamos/{id}/give-back','LoansController@giveback');
	//
	Route::resource('prestamos','LoansController');
});
//------------------------------------------------------------------------------
