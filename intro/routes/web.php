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

Route::get('/', function () {
    return "Bonjour a tous";
});

Route::get('/article', function () {
    $nom = "Elias";
    $prenom = "Aboutaharan";

    return $nom === "Michael" ? "t'es la bonne personne" : "Error";

    // dd($nom);
    if($prenom == "Elias") {
        return "Salut Elias";
    } else {
        return "Pas Correct";
    }
    return $nom . ' ' . $prenom;
});

Route::get("/{user}", function ($user) {
    return $user;
});

Route::get("/{nom}/{prenom}/{age}/", function ($nom, $prenom, $age) {
    return "salut" . $nom . $prenom . "t'as quelle age?" . $age;
});

