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

Route::group(array('before'=>'admin'), function(){
	Route::controller('adminka/items', 'ItemsController');
	Route::controller('adminka', 'AdminController');
});

Route::group(array('before'=>'auth'), function(){
	Route::controller('cabinet', 'MainController');
    
	
});

Route::controller('auth', 'AuthController');



Route::get('/{id?}', [
	'as'=>'main',
	'uses'=>'StaticController@getIndex'
]);

Route::controller('/{id}', 'BaseController');
Route::group(array('before'=>'admin'), function(){
return View::make('hello');
});