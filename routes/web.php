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

Route::get('/','IndexController@home')->name('home');
Route::get('/about','IndexController@about')->name('about');
Route::get('/branch','IndexController@branch')->name('branch');
Route::get('/member','IndexController@member')->name('member');
Route::get('/local','IndexController@local')->name('local');
Route::get('/culture','IndexController@culture')->name('culture');
Route::get('/product/{branch_id}', 'IndexController@product')->name('product');
Route::get('/product_info', 'IndexController@product_info')->name('product_info');
Route::get('/detail', 'IndexController@detail')->name('detail');
