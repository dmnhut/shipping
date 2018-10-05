<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'user'], function () {
    Route::post('store', 'UserController@store');
    Route::post('login', 'UserController@login');
});

Route::group(['prefix' => 'order'], function () {
    Route::post('store', 'OrderController@store');
});

Route::group(['prefix' => 'pay'], function () {
    Route::post('recharge', 'PayController@recharge');
});
