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


//front routes

Route::group(['middleware' => 'web'], function () {
    Route::get('/','Front\HomeController@index')->name('home_page');
    Route::get('/login','Front\LoginController@index')->name('login_page');
    Route::post('/login','Front\LoginController@loginProcess')->name('login_process');
    Route::get('/register','Front\RegisterController@index')->name('register_page');
    Route::post('/register','Front\RegisterController@registerProcess')->name('register_process');
    Route::get('/product/{productName}','Front\ProductController@index')->name('product_page');
});

//admin routes

Route::group(['prefix' => 'admin'],function(){
    Route::get('/','Admin\DashboardController@index')->name('admin_page');

});

