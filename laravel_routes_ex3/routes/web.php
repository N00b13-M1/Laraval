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

// # Exerxcice 3
// 1. Vous allez créer un dossier laravel sous le nom "laravel-routes-exo2"
// 2. Dans la view about, envoyez grâce a la méthode compact une variable "prenom" et une "nom" les afficher en suite leur contenu sur la page

Route::get('/about', function () {
    $nom = "Abutaharan";
    $prenom = "Elias";
    return view('about', compact("nom","prenom"));
});

Route::get('/welcome', function () {

    return view('welcome');
});


Route::get('/', function () {
    return ("Salut les amis");
});
