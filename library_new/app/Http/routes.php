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

Route::get('/', function() { return view('welcome');});
Route::get('/login', ['as'=>'lib_login', 'uses'=>'UserController@login']);
Route::get('/a', function () {return view('admin-login');});
Route::get('/b', function () {return view('index');});
Route::get('/c', function () {return view('new-arrivals');});
Route::get('/d', function () {return view('query');});
Route::get('/e', function () {return view('services');});
Route::get('/f', function () {return view('suggest');});