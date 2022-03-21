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

//About
Route::get("back/about", [AboutItemController::class, "index"])->name("about.index");
Route::get("back/about/{id}/edit", [AboutItemController::class, "edit"])->name('about.edit');
Route::post("back/about/{id}/update", [AboutItemController::class, "update"])->name('about.update');

//Contact
Route::get("back/contact", [ContactItemController::class,"index"])->name("contact.index");
Route::get("back/contact/{id}/edit", [ContactItemController::class, "edit"])->name('contact.edit');
Route::post("back/contact/{id}/update", [ContactItemController::class, "update"])->name('contact.update');

//Facts
Route::get("back/facts", [FactsItemController::class,"index"])->name("facts.index");
Route::post("back/facts/{id}/delete", [FactsItemController::class,"destroy"])->name("facts.destroy");
Route::get("back/facts/{id}/edit", [FactsItemController::class, "edit"])->name("facts.edit");
Route::post("back/facts/{id}/update", [FactsItemController::class, "update"])->name('facts.update');
Route::get("back/facts/create", [FactsItemController::class, "create"])->name("facts.create");
// Route::post("back/facts/store", [FactsItemController::class, "store"])->name("facts.store");

//Navbar
Route::get("back/navbar", [NavHeadshotController::class,"index"])->name("navbar.index");
Route::get("back/navbar", [NavLinkController::class, "index"])->name("navbar.index");
Route::get("back/navbar", [NavSocialController::class, "index"])->name("navbar.index");

//Portfolio
Route::get("back/portfolio", [PortfolioItemController::class, "index"])->name("portfolio.index");
Route::post("back/portfolio/{id}/delete", [PortfolioItemController::class, "destroy"])->name('portfolio.destroy');
Route::get("back/portfolio/{id}/edit", [PortfolioItemController::class, "edit"])->name('portfolio.edit');
Route::post("back/portfolio/{id}/update", [PortfolioItemController::class, "update"])->name('portfolio.update');
Route::get("back/portfolio/create", [PortfolioItemController::class, 'create'])->name('portfolio.create');
Route::post("back/portfolio/store", [PortfolioItemController::class, 'store'])->name('portfolio.store');

//Services
Route::get("back/services", [ServicesItemController::class, "index"])->name("services.index");
Route::post("back/services/{id}/delete", [ServicesItemController::class, "destroy"])->name('services.destroy');

//Skills
Route::get("back/skills", [SkillsItemController::class, "index"])->name("skills.index");
Route::post("back/skills/{id}/delete", [SkillsItemController::class, "destroy"])->name('skilss.destroy');
Route::get("back/skills/{id}/edit", [PortfolioSkillsItemControllerItemController::class, "edit"])->name('skills.edit');
Route::post("back/skills/{id}/update", [SkillsItemController::class, "update"])->name('skilss.update');
Route::get("back/skills/create", [SkillsItemController::class, 'create'])->name('skills.create');


//Testimonials
Route::get("back/testimonials", [TestimonialItemController::class, "index"])->name("testimonials.index");
Route::post("back/testimonials/{id}/delete", [TestimonialItemController::class, "destroy"])->name('testimonials.destroy');
Route::get("back/testimonials/{id}/edit", [TestimonialItemController::class, "edit"])->name('testimonials.edit');
Route::post("back/testimonials/{id}/update", [TestimonialItemController::class, "update"])->name('testimonials.update');
Route::get("back/testimonials/create", [TestimonialItemController::class, 'create'])->name('testimonials.create');
Route::post("back/testimonials/store", [TestimonialItemController::class, 'store'])->name('testimonials.store');


//Titles
Route::get("back/titles", [TitleController::class, "index"])->name("titles.index");
Route::get("back/titles/{id}/edit", [TitleController::class, "edit"])->name("titles.edit");
Route::post("back/titles/{id}/update", [TitleController::class, "update"])->name("titles.update");












