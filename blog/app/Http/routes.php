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

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/profile', 'UserController@profile');
Route::post('/profile', 'UserController@update_avatar');

Route::get('/', 'SectionsController@index');
Route::get('/section_{section}', 'SectionsController@show');

Route::get('/topics', 'TopicsController@index');
Route::get('/topic_{topic}', 'TopicsController@show');
Route::get('/create_{id}', 'TopicsController@create');
Route::post('/topics', 'TopicsController@new_top');

Route::get('/setting','SettingController@setting');
Route::post('/setting_{id}', 'SettingController@change_login');
Route::get('/setting_{id}', 'SettingController@delete');

