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
#check exsiting routes via => $ terminal php artisan routes

Route::get('/', 'HomeController@showWelcome');

Route::get('post/listing', array('uses'=> 'PostController@listing','as' => 'get.post.listing'));
Route::get('post/{id}/{slug}', array('uses'=> 'PostController@single','as' => 'get.post.single'))->where(array('id' => '[1-9][0-9]*+', 'slug' => '[a-zA-Z0-9-_]+'));
Route::post('post/update/{id}', array('uses'=> 'PostController@update','as' => 'post.post.single'))->where(array('id' => '[1-9][0-9]*+'));

Route::resource('user', 'UserController');

//Route::group(array('before' => 'auth'), function() {
//
//    Route::get('post/listing', array('uses'=> 'PostController@listing','as' => 'get.post.listing'));
//    Route::get('post/{id}/{slug}', array('uses'=> 'PostController@single','as' => 'get.post.single', 'before' => 'auth'))->where(array('id' => '[1-9][0-9]*+', 'slug' => '[a-zA-Z0-9-_]+'));
//    Route::post('post/update/{id}', array('uses'=> 'PostController@update','as' => 'post.post.single'))->where(array('id' => '[1-9][0-9]*+'));
//
//});

//Route::group(array('prefix' => 'admin'),function() {
//
//        Route::get('post/listing', array('uses'=> 'PostController@listing','as' => 'get.post.listing'));
//        Route::get('post/{id}/{slug}', array('uses'=> 'PostController@single','as' => 'get.post.single'))->where(array('id' => '[1-9][0-9]*+', 'slug' => '[a-zA-Z0-9-_]+'));
//        Route::post('post/update/{id}', array('uses'=> 'PostController@update','as' => 'post.post.single'))->where(array('id' => '[1-9][0-9]*+'));
//});

Route::get('login', function() {

    return 'login page';

});