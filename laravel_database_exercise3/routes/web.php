<?php

use Illuminate\Support\Facades\Route;
use App\Models\Photo;
use App\Models\Eleve;
use App\Models\Article;

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
    // $photo = Photo::all();
    // dd($photo[0]);
    $eleve = Eleve::all();
    dd($eleve[0]);
    // $article = Article::all();
    // dd($article[0])->name;
    return view('welcome');
});
