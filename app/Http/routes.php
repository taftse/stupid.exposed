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
use Illuminate\Routing\Route;


Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::get('posts','PostController@index');
Route::get('post/{uid}','PostController@show');

Route::group(['middleware' => 'auth'], function()
{
    Route::get('post/create','PostController@create');
    Route::post('post/create','PostController@store');
    Route::get('post/edit/{uid}','PostController@edit');
    Route::put('post/edit/{uid}','PostController@update');
    Route::delete('post/exterminate/{uid}','PostController@destroy');
});