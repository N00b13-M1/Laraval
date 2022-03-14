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
Route::post("/update/about_items/{id}", [About_itemController::class, "update"]);

Route::get("back/about_items/create", [About_itemController::class, 'create'])->name("about_items.create");
Route::post("back/about_items/store", [About_itemController::class, 'store'])->name("about_items.store");


Route::get("/backoffice/banners", [BannerController::class, 'index']); 
Route::get("/backoffice/banners/{id}/delete", [BannerController::class, "destroy"])->name("banners.destroy");
Route::get("/edit/banners/{id}", [BannerController::class, "edit"]);
Route::post("/update/banners/{id}", [BannerController::class, "update"]);

Route::get("back/banners/create", [BannerController::class, 'create'])->name("banners.create");
Route::post("back/banners/store", [BannerController::class, 'store'])->name("banners.store");

Route::get("/backoffice/features", [FeatureController::class, 'index']); 
Route::get("/backoffice/features/{id}/delete", [FeatureController::class, "destroy"])->name("features.destroy");
Route::get("/edit/features/{id}", [FeatureController::class, "edit"]);
Route::post("/update/features/{id}", [FeatureController::class, "update"]);

Route::get("back/features/create", [FeatureController::class, 'create'])->name("features.create");
Route::post("back/features/store", [FeatureController::class, 'store'])->name("features.store");

Route::get("/backoffice/nav_items", [Nav_itemController::class, 'index']); 
Route::get("/backoffice/nav_items/{id}/delete", [Nav_ItemController::class, "destroy"])->name("nav_items.destroy");
Route::get("/edit/nav_items/{id}", [Nav_itemController::class, "edit"]);
Route::post("/update/nav_items/{id}", [Nav_itemController::class, "update"]);

Route::get("back/nav_items/create", [Nav_itemController::class, 'create'])->name("nav_items.create");
Route::post("back/nav_items/store", [Nav_itemController::class, 'store'])->name("nav_items.store");

Route::get("/backoffice/nav_links", [Nav_linkController::class, 'index']);
Route::get("/backoffice/nav_links/{id}/delete", [Nav_linkController::class, "destroy"])->name("nav_links.destroy");
Route::get("/edit/nav_links/{id}", [Nav_linkController::class, "edit"]);
Route::post("/update/nav_links/{id}", [Nav_linkController::class, "update"]);

Route::get("back/nav_links/create", [Nav_linkController::class, 'create'])->name("nav_links.create");
Route::post("back/nav_links/store", [Nav_linkController::class, 'store'])->name("nav_links.store");

Route::get("/backoffice/portfolio_items", [Portfolio_itemController::class, 'index']); 
Route::get("/backoffice/portfolio_items/{id}/delete", [Portfolio_itemController::class, "destroy"])->name("portfolio_items.destroy");
Route::get("/edit/portfolio_items/{id}", [Portfolio_itemsController::class, "edit"]);
Route::post("/update/portfolio_items/{id}", [Portfolio_itemsController::class, "update"]);

Route::get("back/portfolio_items/create", [Nav_linkController::class, 'create'])->name("portfolio_items.create");
Route::post("back/portfolio_items/store", [Nav_linkController::class, 'store'])->name("portfolio_items.store");

Route::get("/backoffice/services", [ServiceController::class, 'index']);
Route::get("/backoffice/services/{id}/delete", [ServiceController::class, "destroy"])->name("services.destroy");
Route::get("/edit/services/{id}", [ServiceController::class, "edit"]);
Route::post("/update/services/{id}", [ServiceController::class, "update"]);

Route::get("back/services/create", [ServiceController::class, 'create'])->name("services.create");
Route::post("back/services/store", [ServiceController::class, 'store'])->name("services.store");


Route::get("/backoffice/titles", [TitleController::class, 'index']);  
Route::get("/backoffice/titles/{id}/delete", [TitleController::class, "destroy"])->name("titles.destroy");
Route::get("/edit/titles/{id}", [TitleController::class, "edit"]);
Route::post("/update/titles/{id}", [TitleController::class, "update"]);

Route::get("back/titles/create", [TitleController::class, 'create'])->name("titles.create");
Route::post("back/titles/store", [TitleController::class, 'store'])->name("titles.store");