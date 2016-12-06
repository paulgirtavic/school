<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/WaitingAuth', function() {
    return view('WaitingAuth');
});

Route::get('/photographers', 'photographers@index');



Route::get('/home', 'HomeController@index');

Route::get('/profile', 'UserController@profile');
Route::post('/profile', 'UserController@update_avatar');

Route::get('/profiles/{id}', 'profiles@profile');

Route::post('/description', 'UserController@update_hello');


Route::get('/gallery', 'GalleryController@paulius');

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::resource('/image', 'ImageController');