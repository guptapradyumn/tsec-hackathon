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


Route::get('/home', function () {
    return view('login');
});

// Route::post('/login','DetectDevice@getDeviceType');


// =================  Redirect ==============
Route::get('/advt','DetectDevice@advt');
Route::get('/from/{id}','DetectDevice@from');
// =================  /Redirect ==============

Route::get('/login', 'UserLoginController@redirectToProvider');

Route::get('/home2', 'UserLoginController@handleProviderCallback');

Route::get('/', function () {
    return view('login');});

Route::post('home', 'login@auth')->name('home');
Route::post('search', 'login@search');

Route::get('service/{client_id}/{product_id}', 'serviceController@store');

