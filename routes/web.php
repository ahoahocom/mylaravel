<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return View::make('welcome');
});

Route::get('articles', 'ArticlesController@index');
Route::get('articles/{id}', 'ArticlesController@show');

Route::resource('posts', 'postController');
