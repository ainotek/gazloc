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
Route::prefix('stores')->name('stores.')->group(function () {
    Route::get('create', 'StoreController@create');
    Route::post('', 'StoreController@store');

    Route::get('', 'StoreController@index');
    Route::get('{id}', 'StoreController@show');

    Route::get('{id}/edit', 'StoreController@edit');
    Route::put('{id}', 'StoreController@index');

    Route::delete('{id}', 'StoreController@destroy');
});

Route::prefix('users')->name('users.')->group(function () {
    Route::get('create', 'UserController@create');
    Route::post('', 'UserController@store');

    Route::get('', 'UserController@index');
    Route::get('{id}', 'UserController@show');

    Route::get('{id}/edit', 'UserController@edit');
    Route::put('{id}', 'UserController@index');

    Route::delete('{id}', 'UserController@destroy');
});

Route::prefix('stores')->name('stores.')->group(function () {
    Route::get('create', 'StoreController@create');
    Route::post('', 'StoreController@store');

    Route::get('', 'StoreController@index');
    Route::get('{id}', 'StoreController@show');

    Route::get('{id}/edit', 'StoreController@edit');
    Route::put('{id}', 'StoreController@index');

    Route::delete('{id}', 'StoreController@destroy');
});
