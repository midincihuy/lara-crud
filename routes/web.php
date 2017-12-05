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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//product Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('product','\App\Http\Controllers\ProductController');
  Route::post('product/{id}/update','\App\Http\Controllers\ProductController@update');
  Route::get('product/{id}/delete','\App\Http\Controllers\ProductController@destroy');
  Route::get('product/{id}/deleteMsg','\App\Http\Controllers\ProductController@DeleteMsg');
});

//customer Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('customer','\App\Http\Controllers\CustomerController');
  Route::post('customer/{id}/update','\App\Http\Controllers\CustomerController@update');
  Route::get('customer/{id}/delete','\App\Http\Controllers\CustomerController@destroy');
  Route::get('customer/{id}/deleteMsg','\App\Http\Controllers\CustomerController@DeleteMsg');
});
