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

//admin
Route::get('/admin','AdminController@index');
Route::get('/dashboard','AdminController@show_dashboard');

//Category
Route::get('/add-category-product','CategoryProduct@add_category_product');
Route::get('/all-category-product','CategoryProduct@all_category_product');
//Product
Route::get('/add-product','ProductController@add_product');