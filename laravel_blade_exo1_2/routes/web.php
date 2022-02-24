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

Route::get('/', function () {
    return view('welcome');
});



// {-- 1. Vous allez créer une nouvelle route qui doit rediriger à une blade about
//     2. Vous allez devoir relier bootstrap à cette nouvelle page
//     3. Vous devez mettre la même barre de navigation et un banner avec un titre --}
    
    
Route::get('/about', function(){
    return view('about');
});