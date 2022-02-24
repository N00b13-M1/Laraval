<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// web.php
Route::get("/", function () {
    return view("welcome");
});


Route::get("/coding", function () {
    $prenoms = array("Maxime", "Elias", "Nicolas", "Ayhan", "Cactus");
    $personne = (object)[
        "nom" => "Coding",
        "prenom" => "Elias",
        "age" => 25
    ];
    return view("pages/coding", compact("prenoms", "personne"));
});