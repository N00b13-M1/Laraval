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


//EDIT & UPDATE ROUTE ARTICLES
Route::get("back/articles/{id}/edit", [ArticlesController::class, "edit"])->name("articles.edit");
Route::post("back/articles/{id}/update", [ArticlesController::class, "update"])->name("articles.update");

//EDIT & UPDATE ROUTE CARS

Route::get("back/cars/{id}/edit", [CarsController::class, "edit"])->name("cars.edit");
Route::post("back/cars/{id}/update", [CarsController::class, "update"])->name("cars.update");

//EDIT & UPDATE ROUTE TEAMS

Route::get("back/teams/{id}/edit", [TeamsController::class, "edit"])->name("teams.edit");
Route::post("back/teams/{id}/update", [TeamsController::class, "update"])->name("teams.update");

//EDIT & UPDATE ROUTE USERS

Route::get("back/users/{id}/edit", [UsersController::class, "edit"])->name("users.edit");
Route::post("back/users/{id}/update", [UsersController::class, "update"])->name("users.update");

//CREATE & STORE ARTICLES

Route::get("back/articles/create", [ArticlesController::class, "create"])->name("articles.create");
Route::post("back/articles/store", [ArticlesController::class, "store"])->name("articles.store");


//CREATE & STORE CARS

Route::get("back/cars/create", [CarsController::class, "create"])->name("cars.create");
Route::post("back/cars/store", [CarsController::class, "store"])->name("cars.store");

//CREATE & STORE TEAMS

Route::get("back/teams/create", [TeamsController::class, "create"])->name("teams.create");
Route::post("back/teams/update", [TeamsController::class, "store"])->name("teams.store");

//CREATE & STORE USERS

Route::get("back/users/create", [UsersController::class, "create"])->name("users.create");
Route::post("back/users/update", [UsersController::class, "store"])->name("users.store");
