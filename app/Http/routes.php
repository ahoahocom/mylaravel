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

Route::get('/', 'ArticlesController@index');
Route::get('contact', 'WelcomeController@contact');

/*Route::get('articles', ['as' => 'articles.index', 'uses' => 'ArticlesController@index']);
Route::get('articles/create', ['as' => 'articles.create', 'uses' => 'ArticlesController@create']);
Route::get('articles/{id}', ['as' => 'articles.show', 'uses' => 'ArticlesController@show']);
Route::post('articles', ['as' => 'articles.store', 'uses' => 'ArticlesController@store']);
Route::get('articles/{id}/edit', ['as' => 'articles.edit', 'uses' => 'ArticlesController@edit']);
Route::patch('articles/{id}', ['as' => 'articles.update', 'uses' => 'ArticlesController@update']);
Route::delete('articles/{id}', ['as' => 'articles.destroy', 'uses' => 'ArticlesController@destroy']);*/

Route::resource('articles', 'ArticlesController');

//Authentication
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::post('auth/logout', 'Auth\AuthController@postRegister');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

//Registration
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//Route::controller('auth', 'Auth\AuthController');
