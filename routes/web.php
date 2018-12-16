<?php

// Front end routes.
Route::resource('/', 'LoopController');
Route::resource('page', 'PageController');
Route::resource('author', 'AuthorController');

// Admin routes.
Route::get('manage', 'ManageController@index')->name('manage.index');
Route::resource('manage/page', 'Manage\PageController', ['as' => 'manage']);
Route::resource('manage/option', 'Manage\OptionController', ['as' => 'manage']);

// Auth routes.
Auth::routes(['register' => false]);
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');