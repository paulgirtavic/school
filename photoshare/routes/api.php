<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::get('/search', [
    'as' => 'api.search',
    'uses' => 'SearchController@search'
]);

Route::get('/how-to', ['uses'=> 'ExifController@index']);
Route::get('/exif/{image_id}', ['uses' => 'ExifController@image']);
Route::get('/exif/{image_id}/json', ['uses' => 'ExifController@image_download']);