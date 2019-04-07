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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/add/landing', 'LandingController@add');
Route::post('/landing/update', 'LandingController@update');
Route::get('/all/landings', 'LandingController@all');
Route::get('/landing/{id}', 'LandingController@get');
