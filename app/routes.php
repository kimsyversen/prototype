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


Route::get('/program', function()  { return View::make('program'); });


Route::get('/program/1', function()  { return View::make('program.1'); });


Route::get('/participants', function()  { return View::make('participant-list'); });

Route::get('/participants2', function()  { return View::make('participant-list2'); });
Route::get('/participant-profile', function()  { return View::make('participant-profile'); });



