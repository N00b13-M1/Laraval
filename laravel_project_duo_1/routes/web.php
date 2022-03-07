<?php

use App\Models\About_item;
use App\Models\Banner;
use App\Models\Feature;
use App\Models\Nav_item;
use App\Models\Nav_link;
use App\Models\Portfolio_item;
use App\Models\Service;
use App\Models\Title;
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

Route::get('/', function () {

    $banner = Banner::first();
    $about_items = About_item::first();
    $features = Feature::shuffle();
    $nav_items = Nav_item::first();
    $nav_links = Nav_link::all();
    $portfolio_items = Portfolio_item::all();
    $titles = Title::all();
    $services = Service::shuffle();

    return view('welcome', compact(
        'banner',                          
        'about_items',
        'features',
        'nav_items',
        'nav_links',
        'portfolio_items',
        'titles',
        'services'
                                ));
});

Route::get("/backoffice", function(){
    return view('pages/backoffice');
});