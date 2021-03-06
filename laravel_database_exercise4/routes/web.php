<?php

use App\Models\User;
use App\Models\Commentaire;
use App\Models\Role;
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
    $user = User::all();
    // dd($user);
    $comment = Commentaire::all();
    // dd($comment);
    $role = Role::all();
    // $role = Role::find(1)->get();
    // dd($role);

    return view('welcome',compact("role","user","comment"));
});
