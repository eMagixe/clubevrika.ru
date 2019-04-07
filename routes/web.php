<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Index
Route::get('/', function () {
    return view('welcome');
});

//Admin
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/landings', function () {
    return view('landings');
});

Route::get('/editor/{id}', function ($id) {
    return view('editor')->with('id', $id);
});

//Landing
Route::get('/landing/{route}', 'LandingController@index')->name('landing-index');
