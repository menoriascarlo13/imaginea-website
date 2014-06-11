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


Route::get('/', function()
{
	return View::make('home.home');
});

Route::post('send_mail', 'HomeController@send_mail');
Route::post('send_mail1', 'HomeController@send_mail1');

Route::get('{cat?}/{page?}', 'HomeController@index');

App::missing(function($exception)
{
    return View::make('error.error');
});




