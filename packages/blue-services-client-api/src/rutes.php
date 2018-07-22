<?php

Route::get('products/', 'Bkrol\ClientApi\Controllers\ClientApiController@getProducts')->name('graterThen');
Route::get('products/available', 'Bkrol\ClientApi\Controllers\ClientApiController@getAvailableProducts')->name('available');
Route::get('products/unavailable', 'Bkrol\ClientApi\Controllers\ClientApiController@getUnavailableProducts')->name('unavailable');
Route::get('product/create', 'Bkrol\ClientApi\Controllers\ClientApiController@create')->name('createProduct');
Route::get('product/{id}', 'Bkrol\ClientApi\Controllers\ClientApiController@getProduct')->name('single');
Route::post('product', 'Bkrol\ClientApi\Controllers\ClientApiController@store')->name('store');
Route::put('product/{id}', 'Bkrol\ClientApi\Controllers\ClientApiController@update')->name('update');
Route::get('delete/{id}', 'Bkrol\ClientApi\Controllers\ClientApiController@delete')->name('removeProduct');

