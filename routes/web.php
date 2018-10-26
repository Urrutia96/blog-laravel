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


Route::get('/categoria/{categoria}', 'HomeController@categoria')->name('categoria');
Route::get('/usuario/{user}','HomeController@user')->name('user');
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', 'AdminController@index')->name('index');
    
});
Route::get('/{slug?}', 'HomeController@index')->name('home');
