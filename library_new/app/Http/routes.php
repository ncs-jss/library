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

Route::get('/', 'PagesController@getIndex');

Route::get('login', 'PagesController@getLogin');

Route::get('new_arrivals', 'PagesController@getArrivals');

Route::get('notices', 'PagesController@getNotices');

Route::get('suggest', 'PagesController@getSuggest');

Route::get('services', 'PagesController@getServices');

Route::get('query', 'PagesController@getQuery');

Route::get('contact', 'PagesController@getContact');

Route::get('resources', 'PagesController@getResources');

Route::get('external_links', 'PagesController@getExternalLinks');
