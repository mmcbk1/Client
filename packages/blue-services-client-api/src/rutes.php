<?php

Route::get('products', 'ClientApiController@getProducts');
Route::get('products/available', 'ClientApiController@getAvailableProducts');
Route::get('products/unavailable', 'ClientApiController@getUnavailableProducts');
Route::get('product/{id}', 'ClientApiController@getProduct');
Route::get('product/create', 'ClientApiController@create');
Route::post('product', 'ClientApiController@store');
Route::put('product/{id}', 'ClientApiController@update');
Route::delete('product/{id}', 'ClientApiController@delete');

