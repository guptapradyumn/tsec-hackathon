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


Route::get('/', function () {
    return view('login');});

Route::post('home', 'login@auth')->name('home');
Route::post('search', 'login@search');

Route::get('service/{client_id}/{product_id}', 'serviceController@store');