<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutItemController;
use App\Http\Controllers\ContactItemController;
use App\Http\Controllers\FactsItemController;
use App\Http\Controllers\NavHeadshotController;
use App\Http\Controllers\NavLinkController;
use App\Http\Controllers\NavSocialController;
use App\Http\Controllers\PortfolioItemController;
use App\Http\Controllers\ServicesItemController;
use App\Http\Controllers\SkillsItemController;
use App\Http\Controllers\TestimonialItemController;
use App\Http\Controllers\TitleController;
use Database\Seeders\NavHeadshotSeeder;
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

// Route::get('/', function () {
//     return view('home');
// })->name('home');

Route::get('/back', function () {
    return view('back/pages/back');
})->name('back');

Route::get("/", [HomeController::class, "index"])->name('home');


Route::get("back/contact", [ContactItemController::class,"index"])->name("contact.index");
Route::get("back/facts", [FactsItemController::class,"index"])->name("facts.index");
Route::get("back/navbar", [NavHeadshotController::class,"index"])->name("navbar.index");
Route::get("back/navbar", [NavLinkController::class, "index"])->name("navbar.index");
Route::get("back/navbar", [NavSocialController::class, "index"])->name("navbar.index");
Route::get("back/about", [AboutItemController::class, "index"])->name("about.index");
Route::get("back/portfolio", [PortfolioItemController::class, "index"])->name("portfolio.index");
Route::get("back/services", [ServicesItemController::class, "index"])->name("services.index");
Route::get("back/skills", [SkillsItemController::class, "index"])->name("skills.index");
Route::get("back/testimonials", [TestimonialItemController::class, "index"])->name("testimonials.index");
Route::get("back/titles", [TitleController::class, "index"])->name("titles.index");

