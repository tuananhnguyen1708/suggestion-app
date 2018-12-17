<?php

//
Route::get('/', 'HomeController@index')->name('index');
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
$this->get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::post('/listing','HomeController@listing')->name('listing');
Route::post('/delete','HomeController@delete')->name('delete');
Route::post('/store','HomeController@store')->name('add');
Route::post('/update','HomeController@update')->name('update');
