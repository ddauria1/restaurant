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

Route::get('/admin/restaurants', 'RestaurantsController@list');
Route::get('/admin/restaurants/country', 'RestaurantsController@list');
Route::get('/admin/restaurants/view/{id}', 'RestaurantsController@show');
Route::get('/admin/restaurants/create', 'RestaurantsController@create');
Route::post('/admin/restaurants/create', 'RestaurantsController@store');
Route::post('/admin/restaurants/update', 'RestaurantsController@update');
Route::get('/admin/restaurants/delete/{id}', 'RestaurantsController@delete');

Route::get('/admin/restaurants/country', 'CountryController@list');
Route::get('/admin/restaurants/country/create', 'CountryController@create');
Route::post('/admin/restaurants/country/create', 'CountryController@store');
Route::get('/admin/restaurants/country/delete/{country}', 'CountryController@delete');


Route::get('/admin/staff', 'StaffController@list');
Route::get('/admin/staff/create', 'StaffController@create');

// Ash commit test

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




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
