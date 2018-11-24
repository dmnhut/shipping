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

Route::get('demo', function () {
    return view('demo');
})->name('demo-template');

Auth::routes();

Route::group(['middleware' => 'admin'], function()
{
    Route::get('/', function () {
        return view('dashboard.index');
    })->name('dashboard');

    Route::get('users', 'UserController@index')->name('users')->middleware('auth');

    Route::get('order', 'OrderController@index')->name('order')->middleware('auth');

    Route::get('pay', 'PayController@index')->name('pay')->middleware('auth');

    Route::get('logout', 'HomeController@logout')->name('logout');
});