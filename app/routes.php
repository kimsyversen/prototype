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
Route::get('/', function() { return View::make('home'); } );
Route::get('/home', function() { return View::make('home'); } );

Route::get('/program', array('uses' => 'ProgramController@index'));

Route::get('/program/date', array('uses' => 'ProgramController@view_date'));
Route::post('/program/date', array('uses' => 'ProgramController@view_date'));

Route::post('/program/date/add', array('uses' => 'UserProgramController@add'));
Route::post('/program/date/remove', array('uses' => 'UserProgramController@remove'));


Route::post('/program/add', array('uses' => 'UserProgramController@add'));
Route::post('/program/remove', array('uses' => 'UserProgramController@remove'));

Route::get('/program/{id}', array('uses' => 'ProgramController@index_id'))->where('id', '[0-9]+');


Route::get('/participants', function()  { return View::make('participant-list'); });

Route::get('/participants2', function()  { return View::make('participant-list2'); });
Route::get('/participant-profile', function()  { return View::make('participant-profile'); });


Route::get('/map', function()  { return View::make('maps'); });

Route::get('/profile/messages', function()  { return View::make('profile-inbox'); });

Route::get('/profile/agenda', array('uses' => 'UserProgramController@index'));

//

// Confide routes
Route::get('users/create', 'UsersController@create');
Route::post('users', 'UsersController@store');
Route::get('users/login', 'UsersController@login');
Route::post('users/login', 'UsersController@doLogin');
Route::get('users/confirm/{code}', 'UsersController@confirm');
Route::get('users/forgot_password', 'UsersController@forgotPassword');
Route::post('users/forgot_password', 'UsersController@doForgotPassword');
Route::get('users/reset_password/{token}', 'UsersController@resetPassword');
Route::post('users/reset_password', 'UsersController@doResetPassword');
Route::get('users/logout', 'UsersController@logout');


Route::get('users/profile', function()  { return View::make('userprofile'); });



