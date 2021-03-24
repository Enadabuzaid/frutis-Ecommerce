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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login','App\Http\Controllers\ClientController@login');
Route::get('/signup','App\Http\Controllers\ClientController@signup');



Route::get('/','App\Http\Controllers\ClientController@home');
Route::get('/checkout','App\Http\Controllers\ClientController@checkout');
Route::get('/cart','App\Http\Controllers\ClientController@cart');
Route::get('/shop','App\Http\Controllers\ClientController@shop');


Route::get('/admin','App\Http\Controllers\AdminController@dashboard');

Route::get('/addcategory','App\Http\Controllers\AdminController@addcategory')->name('add.category');
Route::get('/addproduct','App\Http\Controllers\AdminController@addproduct')->name('add.product');
Route::get('/addslider','App\Http\Controllers\AdminController@addslider')->name('add.slider');;

Route::get('/sliders','App\Http\Controllers\SliderController@slider');
Route::get('/orders','App\Http\Controllers\OrderController@order');

Route::get('/categories','App\Http\Controllers\CategoryController@categroy');
Route::post('save/category','App\Http\Controllers\CategoryController@saveCategory')->name('save.category');
Route::get('edit/category/{id}','App\Http\Controllers\CategoryController@edit')->name('edit.category');
Route::post('update/category/{id}','App\Http\Controllers\CategoryController@updateCategory')->name('update.category');
Route::get('delete/category/{id}','App\Http\Controllers\CategoryController@deleteCategory')->name('delete.category');


Route::get('/products','App\Http\Controllers\ProductController@product');
Route::post('save/product','App\Http\Controllers\ProductController@saveproduct')->name('save.product');



