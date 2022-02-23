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

// # Exercice 5
// 1. Dans un nouveau projet Laravel-route-exo4
// 2. Dans views créer un dossier pages
// 3. Dans le dossier page créer 2 views about et contact
// 4. Créer deux routes dynamique vers ses pages
// 5. Pour about une route avec une variables
// 6. Pour contact une route avec trois variables
// 7. Dans chaque page créer un menu pour changer de page

// Sur about affichez : un fruit qui vient de votre route
// Sur contact affichez : nom, prénom numéro de téléphone qui viennent de la route

Route::get('/', function () {
    return view ('welcome');
});

Route::get('/welcome', function () {
    return "Welcome";
});

Route::get('{route1}', function () {
    $fruit = "cerises";
    return view ('Pages/about', compact('fruit'));
});

Route::get('{route1}/{route2}/{route3}', function () {
    $nom = "Abutaharan";
    $prenom = "Elias";
    $tel = "023732322";
    return view ('Pages/contact', compact('nom','prenom','tel'));
});


