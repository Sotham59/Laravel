<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/', function () {
    $pages = ['Accueil', 'À propos', 'Contact'];
    return View::make('welcome', compact('pages'));
});

Route::get('/contact' , [ContactController::class,'create']);
Route::post('/contact' , [ContactController::class,'store']);
Route::get('/contact/thanks' , [ContactController::class,'thanks']);