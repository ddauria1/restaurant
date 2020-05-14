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

Route::get('/', function () { return view('index'); });
Route::get('/admin/login', 'LoginController@login');

Route::get('/admin/restaurants/list', 'RestaurantsController@list');
Route::get('/admin/restaurants/view/{id}', 'RestaurantsController@show');
Route::get('/admin/restaurants/create', 'RestaurantsController@create');
Route::post('/admin/restaurants/create', 'RestaurantsController@store');

/*
Route::get('/admin/restaurants/search', 'RestaurantsController@search');
Route::get('/admin/restaurants/add', 'RestaurantsController@add');
Route::get('/admin/restaurants/edit', 'RestaurantsController@edit');
Route::get('/admin/restaurants/delete', 'RestaurantsController@delete');

Route::get('/admin/orders/search', 'OrdersController@search');
Route::get('/admin/orders/add', 'OrdersController@add');
Route::get('/admin/orders/edit', 'OrdersController@edit');
Route::get('/admin/orders/delete', 'OrdersController@delete');
*/


