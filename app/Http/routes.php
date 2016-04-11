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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');

Route::get('/users', 'UserController@index');
Route::get('/users/create', 'UserController@create');
Route::post('/users/create', 'UserController@store');
Route::get('/users/{id}/edit', 'UserController@edit')->where('id', '[0-9]+');
Route::post('/users/{id}/edit', 'UserController@update')->where('id', '[0-9]+');
Route::get('/users/{id}/delete', 'UserController@destroy')->where('id', '[0-9]+');
Route::get('/users/{id}/deactivate', 'UserController@deactivate')->where('id', '[0-9]+');

Route::post('/users/upload', 'CropController@postUpload');
Route::post('/users/crop', 'CropController@postCrop');
Route::post('/users/{id}/upload', 'CropController@postUpload')->where('id', '[0-9]+');
Route::post('/users/{id}/crop', 'CropController@postCrop')->where('id', '[0-9]+');

Route::get('/projects', function(){
    return view('template.project.gerenciar_projeto');
});

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
