<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\BackOfficeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes{{  }}
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServicePro{{ vide }}r within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [WelcomeController::class, 'welcome']);

// Route::get('/', function () {

//     $banner = Banner::first();
//     $about_items = About_item::first();
//     $features = Feature::shuffle();
//     $nav_items = Nav_item::first();
//     $nav_links = Nav_link::all();
//     $portfolio_items = Portfolio_item::all();
//     $titles = Title::all();
//     $services = Service::shuffle();

//     return view('welcome', compact(
//         'banner',                          
//         'about_items',
//         'features',
//         'nav_items',
//         'nav_links',
//         'portfolio_items',
//         'titles',
//         'services'
//                                 ));
// });

Route::get("/backoffice", [BackOfficeController::class, 'backoffice']); 
