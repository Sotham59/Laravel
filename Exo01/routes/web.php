<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;

route::get("/", function () {
    return "Hello World !";
});

Route::get("/form", function () {
    return "<h1>Mon formulaire</h1>
    <form action='/user' method='post'>
        <button>Envoyer</button>
    </form>
    ";
});

Route::view('/form','formlaire');

route::post("/user", function () {
    return "Le formulaire à bien été envoyé";
});

Route::redirect('/redirect', '/form');

Route::get("/users", function(Request $request) {
    $name = $request->input('name');
});
