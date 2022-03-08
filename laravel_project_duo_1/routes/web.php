<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\BackOfficeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\About_itemController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\Nav_itemController;
use App\Http\Controllers\Nav_linkController;
use App\Http\Controllers\Portfolio_itemController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TitleController;

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


Route::get("/backoffice", [BackOfficeController::class, 'backoffice']); 
Route::get("/backoffice/about_items", [About_itemController::class, 'index']); 
Route::get("/backoffice/banners", [BannerController::class, 'index']); 
Route::get("/backoffice/features", [FeatureController::class, 'index']); 
Route::get("/backoffice/nav_items", [Nav_itemController::class, 'index']); 
Route::get("/backoffice/nav_links", [Nav_linkController::class, 'index']);
Route::get("/backoffice/portfolio_items", [Portfolio_itemController::class, 'index']); 
Route::get("/backoffice/services", [ServiceController::class, 'index']);
Route::get("/backoffice/titles", [TitleController::class, 'index']);  

