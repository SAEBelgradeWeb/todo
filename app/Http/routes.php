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
Route::group(['prefix' => 'todo'], function(){
	Route::get('/', 'TodoController@index');
	Route::get('/create', [ 'as' => 'kreiraj', 'uses' => 'TodoController@create']);
	Route::post('/', 'TodoController@store');
	
});


Route::group(['prefix' => 'api/v2'], function(){

});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
