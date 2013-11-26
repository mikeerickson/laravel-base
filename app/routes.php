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
	ChromePhp::log('Hello World from ChromePhp');
	ChromePhp::error('ChromePhp Error');
	return View::make('hello');
});

Route::get('test', function(){
	$data = ['Mike','Kira','Joelle','Brady','Bailey','Trevor','Alaya'];
	ChromePhp::log($data);
	return json_encode($data);
});

Route::get('data', function(){
	$data = ['Mike','Kira','Joelle','Brady','Trevor','Bailey','Alaya'];
	return json_encode($data);
});