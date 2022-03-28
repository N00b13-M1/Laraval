<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\UserController;

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
});

Route::get('/back', function () {
    return view('back/pages/back');
})->name("back");

Route::get('back/albums', [AlbumController::class, 'index'])->name("albums.index");
// Route::get('backend/pages/albums/{id}/edit', [AlbumController::class, 'edit'])->name("albums.edit");


Route::get('back/photos', [PhotoController::class, 'index'])->name("photos.index");


//USERS

Route::get('back/users', [UserController::class, 'index'])->name("users.index");


Route::get('back/users/{id}/edit', [UserController::class, 'edit'])->name("users.edit");
Route::post('back/users/{id}/edit', [UserController::class, 'update'])->name("users.update");

Route::get('back/pages/users/new', [UserController::class, 'create'])->name("users.create");
Route::post('back/users', [UserController::class, 'store'])->name("users.store");

Route::post('back/users/{id}/delete', [UserController::class, 'destroy'])->name("users.destroy");

Route::get('back/users/{id}/read', [UserController::class, 'read'])->name("users.read");