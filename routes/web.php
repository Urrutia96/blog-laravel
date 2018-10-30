<?php

use App\Notifications\ArticuloPublicado;
use App\Articulo;
use App\User;

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

Route::get('/not', function () {
    Auth::user()->notify(new ArticuloPublicado(Articulo::first()));
});
Route::get('/login','Auth\LoginController@showLoginForm')->name('login');
Route::post('/login','Auth\LoginController@login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/categoria/{categoria}', 'HomeController@categoria')->name('categoria');
Route::get('/usuario/{user}','HomeController@user')->name('user');
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/', 'AdminController@index')->name('index');
    Route::get('/new','AdminController@formPost')->name('new');
    Route::post('/new', 'AdminController@store')->name('store');
    Route::get('/edit/{id}', 'AdminController@formPost')->name('showEdit');
    Route::post('/edit/{id?}', 'AdminController@edit')->name('edit');
    Route::get('/delete/{id}','AdminController@delete')->name('delete');
});
Route::get('/{slug?}', 'HomeController@index')->name('home');
