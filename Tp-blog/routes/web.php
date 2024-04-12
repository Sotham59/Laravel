<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\BlogController;

Route::get('/', [BlogController::class, 'index'])->name('home');
Route::get('/article/{id}', [BlogController::class, 'showArticle'])->name('article.show');
Route::get('/contact', [BlogController::class, 'showContactForm'])->name('contact.show');
Route::post('/contact', [BlogController::class, 'storeContactForm'])->name('contact.store');



