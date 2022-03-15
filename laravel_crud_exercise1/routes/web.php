<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\TeamsController;
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

Route::get('/', function () {
    return view('home');
})->name("home");

Route::get('/back', function () {
    return view('back/pages/back');
})->name("back");
//BASIC ROUTE
Route::get("back/articles",[ArticlesController::class, "index"])->name("articles.index");
Route::get("back/cars",[CarsController::class, "index"])->name("cars.index");
Route::get("back/teams",[TeamsController::class, "index"])->name("teams.index");
Route::get("back/users",[UsersController::class, "index"])->name("users.index");

//DESTROY ROUTE
Route::post("back/articles/{id}/delete", [ArticlesController::class, "destroy"])->name("articles.destroy");
Route::post("back/cars/{id}/delete", [CarsController::class, "destroy"])->name("cars.destroy");
Route::post("back/teams/{id}/delete", [TeamsController::class, "destroy"])->name("teams.destroy");
Route::post("back/users/{id}/delete", [UsersController::class, "destroy"])->name("users.destroy");