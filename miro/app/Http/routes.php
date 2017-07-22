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



Route::get('/', ['as' => 'frontend-index', 'uses' => 'AboutController@index']);
Route::get('/about', ['as' => 'fontend-about', 'uses' => 'AboutController@about']);
Route::get('/contact', ['as' => 'fontend-contact', 'uses' => 'AboutController@contact']);
Route::get('/thanks', ['as' => 'fontend-thanks', 'uses' => 'AboutController@thanks']);
Route::get('/paintings', ['as' => 'fontend-paintings', 'uses' => 'AboutController@paintings']);
Route::get('/paintings', ['as' => 'fontend-painting', 'uses' => 'AboutController@painting']);
Route::get('/medias', ['as' => 'fontend-admin-medias', 'uses' => 'AboutController@painting']);




//Route::get('/', function(){ return redirect('/image'); });
Route::resource('/image', 'ImageController');
Route::resource('/medias', 'MediaController');
Route::resource('/profile', 'MediaController');



Route::get('contact', 
  ['as' => 'contact', 'uses' => 'AboutController@create']);
Route::post('contact', 
  ['as' => 'contact_store', 'uses' => 'AboutController@store']);