<?php

use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['jwt.auth'])->group(function() { 
	
	Route::post('/', 'AuthController@index');
	
});

Route::post('/register', 'AuthController@register');

Route::post('/login', 'AuthController@signin');