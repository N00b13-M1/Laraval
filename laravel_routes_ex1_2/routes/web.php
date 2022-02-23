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


Route::get('/', function () {
    return "Bonjour chers utilisateurs";
});

// 3. Créez une route dynamique qui renvoi "Bienvenue sur mon site"

// Route::get('/{test}', function ($test) {
//     return "Bienvenue sur mon site";
// });

// // 4. Créez une route dynamique qui renvoi "Hello" + ce qui a été écrit dans la variable de la route

// Route::get('/{dynamic}', function ($dynamic) {
//     return "Hello " . $dynamic;
// });

// # Exercice 2
// 1. Conservez le fichier welcome et créez un second fichier about dans les views
// 2. Créez une route pour chaque fichier /welcome et /about
// 3. Dans chaque fichier mettre un h1 je suis sur la page welcome/about
// 4. Créer une navigation qui permet d'aller d'une page a l'autre

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});