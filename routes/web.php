<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/','ItemController@home');
Route::get('/items','ItemController@home');
Route::get('/items/detail/{id}','ItemController@detail');

Route::get('/cart','CartController@cart');
Route::get('/addtocart/{id}', 'CartController@addToCart');
Route::get('/removecart', 'CartController@removeCart');

Route::get('/order','CartController@add');
Route::post('/order','CartController@create');

Route::get('/admin/category-index','CategoryController@index');
Route::get('/admin/category-add', 'CategoryController@add');
Route::post('/admin/category-add', 'CategoryController@create');
Route::get('/category/delete/{id}', 'CategoryController@delete');
Route::get('/category/edit/{id}','CategoryController@edit');
Route::post('/category/edit/{id}','CategoryController@update');


Route::get('/admin/item-index','ItemController@index');
Route::get('/admin/item-add','ItemController@add');
Route::post('/admin/item-add','ItemController@create');
Route::get('/item/delete/{id}', 'ItemController@delete');
Route::get('/item/edit/{id}','ItemController@edit');
Route::post('/item/edit/{id}','ItemController@update');

Route::get('/admin/order-index','OrderController@index');
Route::get('/confirm/{id}','OrderController@confirm');
Route::get('/undo/{id}','OrderController@undo');
Route::get('/admin/orderhistory-index','OrderController@orderhistory');

Route::get('/items/product','ItemController@product');
Route::get('/items/about','ItemController@about');
Route::get('/items/contact','ItemController@contact');

Route::get('/admin/dashboard','AdminController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
