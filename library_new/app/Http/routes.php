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

Route::get('notice/{id}', ['as'=>'notice','uses'=>'PagesController@getNotice']);

Route::get('add_books', ['as'=>'add_books','uses'=>'AdminPagesController@getAddBook']);

Route::get('add_notices', ['as'=>'add_notices','uses'=>'AdminPagesController@getAddNotice']);

Route::get('null', ['as'=>'null','uses'=>'PagesController@getNotFound']);

Route::get('queries', ['as'=>'queries','uses'=>'AdminPagesController@getViewQueries']);

Route::get('suggestions', ['as'=>'suggestions','uses'=>'AdminPagesController@getSuggestions']);

Route::get('view_query/{id}', ['as'=>'view_query','uses'=>'AdminPagesController@getViewQuery']);

Route::get('view_book/{id}', ['as'=>'view_book','uses'=>'PagesController@getViewBook']);

Route::get('view_suggestion/{id}', ['as'=>'view_suggestion','uses'=>'AdminPagesController@getViewSuggestion']);

Route::get('add_menu',['as'=>'add_menu','uses'=>'AdminPagesController@getAddMenu']);

Route::get('logout',['as'=>'logout','uses'=>'PagesController@logout']);

Route::get('user_queries', ['as'=>'user_queries','uses'=>'PagesController@getUserQueries']);

Route::get('view_menus',['as'=>'view_menus','uses'=>'AdminPagesController@getViewMenu']);

Route::get('edit_menu/{id}',['as'=>'edit_menu','uses'=>'AdminPagesController@getEditMenu']);

Route::get('custom/{name}',['as'=>'custom','uses'=>'PagesController@getCustomMenu']);

Route::get('view_papers',['as'=>'view_papers','uses'=>'PagesController@getViewPapers']);

Route::get('add_papers',['as'=>'add_papers','uses'=>'AdminPagesController@getAddPapers']);

// POST routes

Route::post('login_user',['as'=>'login_user', 'before'=>'csrf', 'uses'=>'UserController@postLogin']);

Route::post('submit_query',['as'=>'submit_query', 'before'=>'csrf', 'uses'=>'UserController@postQuery']);

Route::post('add_book',['as'=>'add_book', 'before'=>'csrf', 'uses'=>'UserController@postAddBook']);

Route::post('add_notice',['as'=>'add_notice', 'before'=>'csrf', 'uses'=>'UserController@postAddNotice']);

Route::post('submit_suggestion',['as'=>'submit_suggestion', 'before'=>'csrf', 'uses'=>'UserController@postSuggest']);

Route::post('query_reply/{id}',['as'=>'query_reply', 'before'=>'csrf', 'uses'=>'UserController@postReply']);

Route::post('new_menu',['as'=>'new_menu', 'before'=>'csrf', 'uses'=>'UserController@postNewMenu']);

Route::post('edit_menu/{id}',['as'=>'edit', 'before'=>'csrf', 'uses'=>'UserController@postEditMenu']);

Route::post('add_paper',['as'=>'add_paper', 'before'=>'csrf', 'uses'=>'UserController@postAddPaper']);