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

Route::post("/backoffice/about_items/{id}/delete", [About_itemController::class, "destroy"])->name("about_items.destroy");

Route::get("/back/about_items/{id}/edit", [About_itemController::class, "edit"])->name("about_items.edit");
Route::get("/back/about_items/{id}/update", [About_itemController::class, "update"])->name("about_items.update");

Route::get("/backoffice/banners", [BannerController::class, 'index']); 
Route::post("/backoffice/banners/{id}/delete", [BannerController::class, "destroy"])->name("banners.destroy");

Route::get("/backoffice/features", [FeatureController::class, 'index']); 
Route::post("/backoffice/features/{id}/delete", [FeatureController::class, "destroy"])->name("features.destroy");

Route::get("/backoffice/nav_items", [Nav_itemController::class, 'index']); 
Route::post("/backoffice/nav_items/{id}/delete", [Nav_ItemController::class, "destroy"])->name("nav_items.destroy");

Route::get("/backoffice/nav_links", [Nav_linkController::class, 'index']);
Route::post("/backoffice/nav_links/{id}/delete", [Nav_linkController::class, "destroy"])->name("nav_links.destroy");

Route::get("/backoffice/portfolio_items", [Portfolio_itemController::class, 'index']); 
Route::post("/backoffice/portfolio_items/{id}/delete", [Portfolio_itemController::class, "destroy"])->name("portfolio_items.destroy");

Route::get("/backoffice/services", [ServiceController::class, 'index']);
Route::post("/backoffice/services/{id}/delete", [ServiceController::class, "destroy"])->name("services.destroy");

Route::get("/backoffice/titles", [TitleController::class, 'index']);  
Route::post("/backoffice/titles/{id}/delete", [TitleController::class, "destroy"])->name("titles.destroy");

