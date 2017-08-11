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



Route::get('/', ['as' => 'frontend-index', 'uses' => 'HomeController@index']);
Route::get('/about', ['as' => 'fontend-about', 'uses' => 'HomeController@about']);
Route::get('/vid', ['as' => 'vid', 'uses' => 'HomeController@vid']);
Route::get('/tryvid1', ['as' => 'vid1', 'uses' => 'HomeController@tryvid1']);


//vid2
Route::get('/tryvid2', ['as' => 'vid2', 'uses' => 'HomeController@tryvid2']);
Route::get('/vi2page', ['as' => 'tryvid2page', 'uses' => 'HomeController@tryvid2page']);




Route::get('/archive', ['as' => 'fontend-archive', 'uses' => 'HomeController@archive']);
Route::get('/thanks', ['as' => 'fontend-thanks', 'uses' => 'HomeController@thanks']);
Route::get('/medias', ['as' => 'fontend-admin-medias', 'uses' => 'HomeController@painting']);

Route::get('/paintings', ['as' => 'fontend-paintings', 'uses' => 'HomeController@paintings']);

Route::get('/videos-miro', ['as' => 'videos', 'uses' => 'HomeController@videos']);

Route::get('/pictures', ['as' => 'fontend-pictures', 'uses' => 'HomeController@pictures']);


// Only authenticated users may enter...
Route::group(['middleware' => 'auth'], function()
{
    Route::get('/medias/category', ['as' => 'medias-category', 'uses' => 'MediaController@category']);
    //Route::resource('todo', 'TodoController', ['only' => ['index']]);
    Route::resource('/image', 'ImageController');
    Route::resource('/medias', 'MediaController');
    Route::resource('/socials', 'SocialController');
    Route::resource('/profile', 'ProfileController');
    Route::get('/dashboard', ['as' => 'fontend-admin-dashboard', 'uses' => 'HomeController@dashboard']);
});
// Using A Controller...

Route::get('profilelkjlkj', [
    'middleware' => 'auth',
    'uses' => 'ProfileController@show'
]);

Route::get('contact', 
  ['as' => 'contact', 'uses' => 'ContactController@create']);
Route::post('contact', 
  ['as' => 'contact_store', 'uses' => 'ContactController@store']);

/*
Route::get('/contact', ['as' => 'fontend-contact', 'uses' => 'HomeController@contact']);
*/

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
            return Redirect::to('/');
        }
});