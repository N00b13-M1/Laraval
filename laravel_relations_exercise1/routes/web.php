<?php

use App\Http\Controllers\BackController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;

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


//Users

Route::get('back/users', [UserController::class, 'index'])->name("users.index");

Route::get('back/users/{id}/edit', [UserController::class, 'edit'])->name("users.edit");
Route::post('back/users/{id}/edit', [UserController::class, 'update'])->name("users.update");

Route::get('back/users/new', [UserController::class, 'create'])->name("users.create");
Route::post('back/users', [UserController::class, 'store'])->name("users.store");

Route::post('back/users/{id}/delete', [UserController::class, 'destroy'])->name("users.destroy");

Route::get('back/users/{id}/read', [UserController::class, 'show'])->name("users.read");


//Roles

Route::get('back/roles', [RoleController::class, 'index'])->name("roles.index");


Route::get('back/roles/{id}/edit', [RoleController::class, 'edit'])->name("roles.edit");
Route::post('back/roles/{id}/edit', [RoleController::class, 'update'])->name("roles.update");

Route::get('back/roles/new', [RoleController::class, 'create'])->name("roles.create");
Route::post('back/roles', [RoleController::class, 'store'])->name("roles.store");

Route::post('back/roles/{id}/delete', [RoleController::class, 'destroy'])->name("roles.destroy");

Route::get('back/roles/{id}/read', [RoleController::class, 'show'])->name("roles.read");
