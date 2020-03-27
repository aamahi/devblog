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


//      Auth Route
Auth::routes();


//   Frontend route
Route::get('/',"Frontend\home@index")->name('frontend.home');


//      Admin Route

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/category', 'Category@index')->name('category');
Route::post('/category', 'Category@add_category');
Route::get('/deactive_category/{id}',"Category@deactive_category")->name('deactive_category');
Route::get('/active_category/{id}',"Category@active_category")->name('active_category');

