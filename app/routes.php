<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('account/demo', 'AccountController@getDemo');
Route::get('account/login', 'AccountController@getLogin');
Route::post('account/login', 'AccountController@postLogin');
Route::get('account/reset', 'AccountController@getReset');
Route::post('account/reset', 'AccountController@postReset');
Route::group(array('before' => 'auth'), function()
{
	Route::get('/', 'ClientController@getAll');
	Route::Controller('clients', 'ClientController');
	Route::Controller('projects', 'ProjectController');
	Route::get('account/logout', 'AccountController@getLogout');
});