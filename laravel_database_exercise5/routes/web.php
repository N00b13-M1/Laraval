<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\EquipesController;
use App\Http\Controllers\PortfoliosController;
use App\Http\Controllers\UsersController;


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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [HomeController::class, 'index']);

// Route::get('/articles', function () {
//     $articles = Article::all();
//     return view('/pages/articles',compact('articles'));
// });

Route::get('/articles', [ArticlesController::class, 'index']);

// Route::get('/equipes', function () {
//     $equipes = Equipe::all();
//     return view('/pages/equipes', compact('equipes'));
// });

Route::get('/equipes', [EquipesController::class, 'index']);

// Route::get('/portfolios', function () {
//     $portfolios = Portfolio::all();
//     return view('/pages/portfolios', compact('portfolios') );
// });

Route::get('/portfolios', [PortfoliosController::class, 'index']);

// Route::get('/users', function () {
//     $users = User::all();
//     return view('/pages/users', compact('users'));
// });


Route::get('/users', [UsersController::class, 'index']);

