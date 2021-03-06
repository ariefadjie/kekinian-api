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

Route::group(['prefix' => 'api/v1','middleware'=>'api'], function () {
    Route::resource('places','Api\PlaceController',['only'=>['index','show']]);
    Route::resource('reviews','Api\ReviewController',['only'=>['store','show']]);
});