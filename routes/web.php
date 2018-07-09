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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'Front\HomeController@index')->name('home_page');
});

Route::get('/logout', function () {
    Auth::logout();
    return redirect()->route('home_page');
})->name('logout');

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', 'Front\LoginController@index')->name('login');
    Route::post('/login', 'Front\LoginController@loginProcess')->name('login_process');
    Route::get('/register', 'Front\RegisterController@index')->name('register_page');
    Route::post('/register', 'Front\RegisterController@registerProcess')->name('register_process');
});

Route::get('/book/{bookName}', 'Front\BookController@getBookByName')->name('product_page');
Route::get('/select2/select_requests', 'SelectController@index')->name('select_route');
Route::get('/category/{categoryName}', 'Admin\CategoryController@findCategoryByName')->name('category.page');
Route::get('/publisher/{publisher_name}', 'Admin\PublisherController@delete')->name('publisher.page');


//admin routes

Route::group(['prefix' => '{locale?}/admin', 'middleware' => 'admin'], function ($locale = 'az') {

    Route::get('/', 'Admin\DashboardController@index')->name('admin_page')->middleware('admin');

    Route::get('/msk/cities', 'Admin\Msk\CityController@index')->name('msk_cities');
    Route::post('/msk/cities/save', 'Admin\Msk\CityController@save')->name('msk_cities.save');
    Route::post('/msk/cities/delete', 'Admin\Msk\CityController@delete')->name('msk_cities.delete');

    Route::get('/msk/book_langs', 'Admin\Msk\BookLangController@index')->name('msk_book_langs');
    Route::post('/msk/book_langs/save', 'Admin\Msk\BookLangController@save')->name('msk_book_langs.save');
    Route::post('/msk/book_langs/delete', 'Admin\Msk\BookLangController@delete')->name('msk_book_langs.delete');

    Route::get('/msk/msk_book_statuses', 'Admin\Msk\BookStatusController@index')->name('msk_book_statuses');
    Route::post('/msk/msk_book_statuses/save', 'Admin\Msk\BookStatusController@save')->name('msk_book_statuses.save');
    Route::post('/msk/msk_book_statuses/delete', 'Admin\Msk\BookStatusController@delete')->name('msk_book_statuses.delete');

    Route::get('/msk/writers', 'Admin\Msk\WriterController@index')->name('msk_writers');
    Route::post('/msk/writers/save', 'Admin\Msk\WriterController@save')->name('msk_writers.save');
    Route::post('/msk/writers/delete', 'Admin\Msk\WriterController@delete')->name('msk_writers.delete');

    Route::get('/category', 'Admin\CategoryController@index')->name('category.admin');
    Route::post('/category/save', 'Admin\CategoryController@saveCategory')->name('category.save');
    Route::post('/category/delete', 'Admin\CategoryController@deleteCategory')->name('category.delete');

    Route::post('/sub_category/save', 'Admin\CategoryController@saveSubCategory')->name('subcategory.save');
    Route::post('/sub_category/delete', 'Admin\CategoryController@deleteSubCategory')->name('subcategory.delete');
    Route::post('/sub_category/get', 'Admin\CategoryController@getAllSubCategory')->name('subcategory.get');

    Route::get('/publisher', 'Admin\PublisherController@index')->name('publisher.admin');
    Route::post('/publisher/save', 'Admin\PublisherController@save')->name('publisher.save');
    Route::post('/publisher/delete', 'Admin\PublisherController@delete')->name('publisher.delete');

    Route::get('/books', 'Admin\BookController@index')->name('book.admin');
    Route::get('/book/edit/{book}', 'Admin\BookController@addEditBook')->name('book.add_edit.modal');
    Route::post('/book/edit/{book}', 'Admin\BookController@addEditBookAction')->name('book.add_edit.action');
    Route::get('/book/info/{book}', 'Admin\BookController@infoBook')->name('book.info.modal');
    Route::post('/book/delete', 'Admin\BookController@deleteBook')->name('book.delete');

    Route::get('/users', 'Admin\UsersController@index')->name('users.admin');
    Route::get('/orders', 'Admin\OrdersController@index')->name('orders.admin');


});

