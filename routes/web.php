<?php

Route::get('/', 'PageController@test')->name('test');
Route::get('/test1', 'PageController@test1')->name('test1');
Route::get('/test2', 'PageController@test2')->name('test2');
Route::get('/test3', 'PageController@test3')->name('test3');