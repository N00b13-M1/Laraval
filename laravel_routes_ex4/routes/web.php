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

// # Exerxcice 4
// 1. Dans un nouveau projet laravel-route-exo4
// 2. Videz le contenu de la page welcome
// 3. Ajoutez une structure html de base
// 4. Modifiez la route de base en route dynamique avec 2 variables
// 5. Affichez le contenu de ces deux variables dans la page welcome

Route::get('{var1}/{var2}', function ($var1,$var2){
    return view ('welcome', compact('var1', 'var2'));
    // return "hello " . $var1 . " " . $var2;
});

// Route::get('/welcome', function () {

//     return view ('welcome', compact('var1', 'var2'));
// });

Route::get('/', function () {
    return "Bonjour ";
});


