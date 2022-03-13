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

// Route::get("/back/about_items/{id}/edit", [About_itemController::class, "edit"])->name("about_items.edit");
// Route::get("/back/about_items/{id}/update", [About_itemController::class, "update"])->name("about_items.update");


Route::get("/backoffice/about_items", [About_itemController::class, 'index']);
Route::get("/backoffice/about_items/{id}/delete", [About_itemController::class, "destroy"])->name("about_items.destroy");
Route::get("/edit/about_items/{id}", [About_itemController::class, "edit"]);
Route::get("/update/about_items/{id}", [About_itemController::class, "update"]);

Route::get("/backoffice/banners", [BannerController::class, 'index']); 
Route::get("/backoffice/banners/{id}/delete", [BannerController::class, "destroy"])->name("banners.destroy");
Route::get("/edit/banners/{id}", [BannerController::class, "edit"]);
Route::get("/update/banners/{id}", [BannerController::class, "update"]);

Route::get("/backoffice/features", [FeatureController::class, 'index']); 
Route::get("/backoffice/features/{id}/delete", [FeatureController::class, "destroy"])->name("features.destroy");
Route::get("/edit/features/{id}", [FeatureController::class, "edit"]);
Route::get("/update/features/{id}", [FeatureController::class, "update"]);

Route::get("/backoffice/nav_items", [Nav_itemController::class, 'index']); 
Route::get("/backoffice/nav_items/{id}/delete", [Nav_ItemController::class, "destroy"])->name("nav_items.destroy");
Route::get("/edit/nav_items/{id}", [Nav_itemController::class, "edit"]);
Route::get("/update/nav_items/{id}", [Nav_itemController::class, "update"]);

Route::get("/backoffice/nav_links", [Nav_linkController::class, 'index']);
Route::get("/backoffice/nav_links/{id}/delete", [Nav_linkController::class, "destroy"])->name("nav_links.destroy");
Route::get("/edit/nav_links/{id}", [Nav_linkController::class, "edit"]);
Route::get("/update/nav_links/{id}", [Nav_linkController::class, "update"]);

Route::get("/backoffice/portfolio_items", [Portfolio_itemController::class, 'index']); 
Route::get("/backoffice/portfolio_items/{id}/delete", [Portfolio_itemController::class, "destroy"])->name("portfolio_items.destroy");
Route::get("/edit/portfolio_items/{id}", [Portfolio_itemsController::class, "edit"]);
Route::get("/update/portfolio_items/{id}", [Portfolio_itemsController::class, "update"]);

Route::get("/backoffice/services", [ServiceController::class, 'index']);
Route::get("/backoffice/services/{id}/delete", [ServiceController::class, "destroy"])->name("services.destroy");
Route::get("/edit/services/{id}", [ServiceController::class, "edit"]);
Route::get("/update/services/{id}", [ServiceController::class, "update"]);

Route::get("/backoffice/titles", [TitleController::class, 'index']);  
Route::get("/backoffice/titles/{id}/delete", [TitleController::class, "destroy"])->name("titles.destroy");
Route::get("/edit/titles/{id}", [TitleController::class, "edit"]);
Route::get("/update/titles/{id}", [TitleController::class, "update"]);