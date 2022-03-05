<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;
use App\Models\Equipe;
use App\Models\Portfolio;
use App\Models\User;




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

// -- # Partie B
//     5. Vous allez dans le web.php, et dans la route vous allez faire ceci avec un dd() :

Route::get('/', function () {
    // //- Affichez tous les utilisateurs
    $users = User::all();
    // //- Affichez le premier utilisateur
    // $userFirst = User::all()->first();
    // //- Affichez le dernier utilisateur
    // $userLast = User::all()->last();
    // // - Affichez les utilisateurs grâce à leur nom
    // $filterOnName = User::where("nom", "=", "Bruce")->value("email");
    // // - Affichez l'utilisateur qui a l'id 5
    // $userFive = User::find(5);
    // // - Affichez le nombre d'utilisateurs qu'il y a dans la table
    $numberOfUsers = User::all()->count();
    // - Affichez deux utilisateurs qui font partie du même pays
    $sameCountry = User::where("pays", "West April")->get();
    // foreach ($sameCountry as $value) {
    //     dd($value->nom);
    // }
    // - Affichez le premier utilisateur qui habite dans un pays spécifique --
    $specificCountry = User::where("pays", "West April")->get()->first;
    // dd($users, $userFirst->nom, $userLast->nom, $userFive, $numberOfUsers, $filterOnName);
    // dd($numberOfUsers, $sameCountry, $specificCountry->nom);
    //$userLast= User::all()->last();
    // dd($userLast)
    // dd($firstUser->nom);
    // dd($users[$users->length -1 ]);

    return view('home');

});

Route::get('/articles', function () {
    $articles = Article::all();
    return view('/pages/articles',compact('articles'));
});


Route::get('/equipes', function () {
    $equipes = Equipe::all();
    return view('/pages/equipes', compact('equipes'));
});

Route::get('/portfolios', function () {
    $portfolios = Portfolio::all();
    return view('/pages/portfolios', compact('portfolios') );
});

Route::get('/users', function () {
    $users = User::all();
    return view('/pages/users',compact('users'));
});
