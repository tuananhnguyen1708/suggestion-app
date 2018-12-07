<?php

//
Route::get('/', function (){})->middleware('auth');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
