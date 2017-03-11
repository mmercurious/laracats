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

Route::get('/', 'CatController@index');
Route::get('/cats/create', 'CatController@create');
Route::post('/cats', 'CatController@save');
Route::get('/cats/{cat}', 'CatController@show');

Route::auth();

Route::get('/home', 'HomeController@index');
