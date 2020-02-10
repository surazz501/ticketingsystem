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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'DashboardController@logout')->name('log-out');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', 'DashboardController@index');
    Route::resource('ticket', 'TicketController');
    Route::get('/settings', 'SettingController@index')->name('settings.index');
    Route::get('/settings/categories', 'SettingController@categories')->name('settings.categories');
    Route::get('/settings/category/create', 'SettingController@create_category')->name('settings.categories.create');
    Route::post('/settings/category/store', 'SettingController@store_category')->name('settings.categories.store');
    Route::post('/ticket/comment/store','TicketController@storeComment')->name('store.comment');
    Route::get('/comments', 'TicketController@fetchComments')->name('fetch.comment');



});

