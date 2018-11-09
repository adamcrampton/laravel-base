<?php

// Front end routes.
Route::resource('/', 'PageController');

// Admin routes.
Route::resource('manage', 'ManageController');
Route::resource('options', 'OptionController');

// Auth routes.
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');