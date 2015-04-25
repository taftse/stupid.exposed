<?php

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