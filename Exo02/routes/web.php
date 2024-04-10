<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/', function () {
    $pages = ['Accueil', 'À propos', 'Contact'];
    return View::make('welcome', compact('pages'));
});