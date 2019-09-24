<?php

//
Route::get('/', 'UserController@dashboard')->name('index');
Route::get('/home', 'UserController@index')->name('home');
Route::get('/dashboard', 'UserController@dashboard')->name('dashboard');
Auth::routes();
$this->get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::post('/listing','UserController@listing')->name('listing');
Route::post('/delete','UserController@delete')->name('delete');
Route::post('/store','UserController@store')->name('store');
Route::post('/update','UserController@update')->name('update');
