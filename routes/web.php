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
//front
Route::get('/','trangchuController@index');

//end
Route::get('/admin','AdminController@index');

//shipper
Route::get('/shipper','ShipperController@index');

