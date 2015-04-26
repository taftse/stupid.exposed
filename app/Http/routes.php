<?php

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

// list all posts
Route::get('posts',['as' => 'posts', 'uses' =>'PostController@index']);

Route::get('post', function(){
    return redirect()->route('posts');
});

// list all categories
Route::get('categories',['as'=>'categories','use'=>'CategoryController@index']);

Route::get('category', function(){
    return redirect()->route('categories');
});

// list all posts belonging to a category
Route::get('category/{category}','CategoryController@show');

Route::group([/*'middleware' => 'auth'*/], function()
{
    Route::get('post/create/video','VideoController@create');
    Route::post('post/create/video','VideoController@store');

    Route::get('post/create/gallery','ImageController@create');
    Route::post('post/create/gallery','ImageController@store');

    Route::get('post/create/story','StoryController@create');
    Route::post('post/create/story','StoryController@store');

    Route::get('post/create','PostController@create');

    //Route::post('post/create','PostController@store');

    Route::get('post/edit/{slug}','PostController@edit');
    Route::put('post/edit/{slug}','PostController@update');
    Route::delete('post/exterminate/{slug}','PostController@destroy');
});

Route::get('post/{slug}',['as'=>'post','use'=>'PostController@show']);

