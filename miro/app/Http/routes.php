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


// Only authenticated users may enter...
Route::group(['middleware' => 'auth'], function()
{
    //Route::resource('todo', 'TodoController', ['only' => ['index']]);
	Route::resource('/image', 'ImageController');
	Route::resource('/medias', 'MediaController');
	Route::resource('/profile', 'MediaController');
});
// Using A Controller...

Route::get('profilelkjlkj', [
    'middleware' => 'auth',
    'uses' => 'ProfileController@show'
]);


Route::get('contact', 
  ['as' => 'contact', 'uses' => 'AboutController@create']);
Route::post('contact', 
  ['as' => 'contact_store', 'uses' => 'AboutController@store']);



// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('home', function(){
        if (Auth::guest()) {
            // $request->user() returns an instance of the authenticated user...
            return Redirect::to('auth/login');
        }else{
			echo 'Welcome home' . Auth::user()->email . "."; 
        }
});