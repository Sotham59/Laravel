<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');
    Route::resource('/articles', 'ArticleController');
    Route::resource('/comments', 'CommentController');
});