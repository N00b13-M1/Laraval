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
    $title= "Welcome";
    return view('welcome', compact('title'));
});


Route::get('/about', function () {
    $title1 = "About";
    return view('/pages/about', compact('title1'));
});

Route::get('contact', function () {
    $title2 = "Contact";
    return view('/pages/contact', compact('title2'));
});

Route::get('services', function () {
    $title3 = "Services";
    return view('/pages/services', compact('title3'));
});

