<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About_item;
use App\Models\Contact_item;
use App\Models\Facts_item;
use App\Models\NavHeadshot;
use App\Models\Nav_link;
use App\Models\Nav_social;
use App\Models\Portfolio_item;
use App\Models\Services_item;
use App\Models\Skills_item;
use App\Models\Testimonial_item;
use App\Models\Title;

class HomeController extends Controller
{
    public function index() {
        $about_items = About_item::all();
        $contact_items = Contact_item::all();
        $facts_items = Facts_item::all();
        $navheadshot = NavHeadshot::first();
        $nav_links = Nav_link::all();
        $nav_socials = Nav_social::all();
        $portfolio_items = Portfolio_item::all();
        $skill_items = Skills_item::all();
        $testimonial_items = Testimonial_item::all();
        $services_items = Services_item::all();
        $titles = Title::all();
        
        // dd($contact_items);
        return view ("home", compact(
            "about_items",
            "contact_items",
            "facts_items",
            "navheadshot",
            "nav_links",
            "nav_socials",
            "portfolio_items",
            "skill_items",
            "testimonial_items",
            "services_items",
            "titles"
        ));
}
}
