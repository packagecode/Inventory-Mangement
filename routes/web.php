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

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::resource('/welcome','HomeCtrl');
Route::get('/','HomeCtrl@index');
Route::resource('/category','CategoryController');
Route::get('delete/{id}','CategoryController@destroy');

Route::resource('/ParceleseInvoice','ParceleseInvoiceController');
Route::resource('/customer','CustomerCtrl');
Route::resource('/product','ProductController');
Route::get('delete/{id}','ProductController@destroy');
Route::get('delete/{id}','CustomerCtrl@destroy');



Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
