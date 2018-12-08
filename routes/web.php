<?php

// Front end routes.
Route::resource('/', 'LoopController');
Route::resource('page', 'PageController');
Route::resource('author', 'AuthorController');

// Admin routes.
Route::resource('manage', 'ManageController');
Route::resource('option', 'OptionController');

// Auth routes.
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
