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
Route::get('/all-product','ProductController@all_product');
//
Route::get('/all-bill','AdminController@show_all_bill');
Route::get('/bill-detail','BillController@show_bill_detail');
//
Route::get('/account','AdminController@show_account');
//
Route::get('/add-sale','SaleController@add_sale');
Route::get('/all-sale','SaleController@all_sale');
//shipper
Route::get('/shipper','ShipperController@index');


