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

// # Exercice 1
// 1. Vous allez créer un dossier laravel sous le nom de "laravel-routes-exo1"
// 2. Créez une route qui renvoi une string "Bonjour chers utilisateurs"
// 3. Créez une route dynamique qui renvoi "Bienvenue sur mon site"
// 4. Créez une route dynamique qui renvoi "Hello" + ce qui a été écrit dans la variable de la route


Route::get('/', function () {
    return "Bonjour chers utilizateurs";
});