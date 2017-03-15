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

Route::group(['middleware' => 'auth'], function () {
	// Create new cat
	Route::get('/cats/create', 'CatController@create');
	Route::post('/cats', 'CatController@save');

	// Comment a cat
	Route::post('/cats/{cat}/comments', 'CommentController@save');

	// Show user's cats
	Route::get('/mycats', 'CatController@showMyCats');

	// Delete a cat
	Route::get('/cats/{cat}/delete', 'CatController@deleteOne');
	Route::post('/cats/{cat}/remove', 'CatController@confirmDeleteOne');

	// User's profile
	Route::get('/profile', 'UserController@index');
	Route::get('/profile/edit', 'UserController@edit');
	Route::get('/profile/password', 'UserController@newPassword');
	// Edit user's info
	Route::post('/user', 'UserController@save');
	// Change user's password
	Route::post('/user/password', 'UserController@changePassword');
	// Delete user's account
	Route::get('/delete', 'UserController@delete');
	Route::post('/delete', 'UserController@deleteUser');

	

});

Route::auth();

Route::group(['middleware' => ['auth', 'adminOnly']], function () {
	// Admin portal
	Route::get('/admin', 'HomeController@index');
});

// Available for all
Route::get('/', 'CatController@index');
Route::get('/cats/{cat}', 'CatController@show');
