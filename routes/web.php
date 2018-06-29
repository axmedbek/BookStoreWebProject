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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'],function (){
    Route::get('/', 'Front\HomeController@index')->name('home_page');
});

Route::get('/logout',function(){
    Auth::logout();
    return redirect()->route('home_page');
})->name('logout');

Route::group(['middleware' => 'guest'],function(){
    Route::get('/login', 'Front\LoginController@index')->name('login');
    Route::post('/login', 'Front\LoginController@loginProcess')->name('login_process');
    Route::get('/register', 'Front\RegisterController@index')->name('register_page');
    Route::post('/register', 'Front\RegisterController@registerProcess')->name('register_process');
});

Route::get('/product/{productName}', 'Front\ProductController@index')->name('product_page');


//admin routes

Route::group(['prefix' => 'admin','middleware' => 'admin'], function () {
    Route::get('/', 'Admin\DashboardController@index')->name('admin_page');
    Route::get('/msk/cities','Admin\Msk\CityController@index')->name('msk_cities');
    Route::post('/msk/cities/save','Admin\Msk\CityController@save')->name('msk_cities.save');
    Route::post('/msk/cities/delete','Admin\Msk\CityController@delete')->name('msk_cities.delete');

});

