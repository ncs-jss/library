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

Route::get('/', ['as'=>'home','uses'=>'PagesController@getIndex']);

Route::get('login', ['as'=>'login','uses'=>'PagesController@getLogin']);

Route::get('new_arrivals', ['as'=>'new_arrivals','uses'=>'PagesController@getArrivals']);

Route::get('notices', ['as'=>'notices','uses'=>'PagesController@getNotices']);

Route::get('suggest', ['as'=>'suggest','uses'=>'PagesController@getSuggest']);

Route::get('services', ['as'=>'services','uses'=>'PagesController@getServices']);

Route::get('query', ['as'=>'query','uses'=>'PagesController@getQuery']);

Route::get('contact', ['as'=>'contact','uses'=>'PagesController@getContact']);

Route::get('e-resources', ['as'=>'resources','uses'=>'PagesController@getResources']);

Route::get('external-links', ['as'=>'external_links','uses'=>'PagesController@getExternalLinks']);
