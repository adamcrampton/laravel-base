<?php

// Front end routes.
Route::resource('/', 'LoopController');
Route::resource('page', 'PageController');
Route::resource('author', 'AuthorController');

// Admin routes.
Route::resource('manage', 'ManageController');
Route::resource('option', 'OptionController');

// Auth routes.
Auth::routes(['register' => false]);
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');