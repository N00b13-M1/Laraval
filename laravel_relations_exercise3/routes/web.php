<?php

use App\Http\Controllers\BackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\DashController;
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

Route::get('/', [HomeController::class, 'index'])->name("home.index");
Route::get('/back', [BackController::class, 'index'])->name("back.index");
Route::get('/dashboard', [DashController::class, 'index'])->name("front.dash");

//Teams

Route::get('back/teams', [TeamController::class, 'index'])->name("teams.index");

Route::get('back/teams/{id}/edit', [TeamController::class, 'edit'])->name("teams.edit");
Route::post('back/teams/{id}/edit', [TeamController::class, 'update'])->name("teams.update");

Route::get('back/teams/new', [TeamController::class, 'create'])->name("teams.create");
Route::post('back/teams', [TeamController::class, 'store'])->name("teams.store");

Route::post('back/teams/{id}/delete', [TeamController::class, 'destroy'])->name("teams.destroy");

Route::get('back/teams/{id}/read', [TeamController::class, 'show'])->name("teams.read");


//Players

Route::get('back/players', [PlayerController::class, 'index'])->name("players.index");


Route::get('back/players/{id}/edit', [PlayerController::class, 'edit'])->name("players.edit");
Route::post('back/players/{id}/edit', [PlayerController::class, 'update'])->name("players.update");

Route::get('back/players/new', [PlayerController::class, 'create'])->name("players.create");
Route::post('back/players', [PlayerController::class, 'store'])->name("players.store");

Route::post('back/players/{id}/delete', [PlayerController::class, 'destroy'])->name("players.destroy");

Route::get('back/players/{id}/read', [PlayerController::class, 'show'])->name("players.read");

//Photos
Route::get('back/photos', [PhotoController::class, 'index'])->name("photos.index");

Route::get('back/photos/{id}/edit', [PhotoController::class, 'edit'])->name("photos.edit");
Route::post('back/photos/{id}/edit', [PhotoController::class, 'update'])->name("photos.update");

Route::get('back/photos/new', [PhotoController::class, 'create'])->name("photos.create");
Route::post('back/photos', [PhotoController::class, 'store'])->name("photos.store");

Route::post('back/photos/{id}/delete', [PhotoController::class, 'destroy'])->name("photos.destroy");

//Positions
Route::get('back/positions', [PositionController::class, 'index'])->name("positions.index");

Route::get('back/positions/{id}/edit', [PositionController::class, 'edit'])->name("positions.edit");
Route::post('back/positions/{id}/edit', [PositionController::class, 'update'])->name("positions.update");

Route::get('back/positions/new', [PositionController::class, 'create'])->name("positions.create");
Route::post('back/positions', [PositionController::class, 'store'])->name("positions.store");

Route::post('back/positions/{id}/delete', [PositionController::class, 'destroy'])->name("positions.destroy");

// Route::resource('position', Pos)