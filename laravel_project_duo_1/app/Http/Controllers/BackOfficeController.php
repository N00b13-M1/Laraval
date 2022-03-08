<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About_item;
use App\Models\Banner;
use App\Models\Feature;
use App\Models\Nav_item;
use App\Models\Nav_link;
use App\Models\Portfolio_item;
use App\Models\Service;
use App\Models\Title;

class BackOfficeController extends Controller
{
    public function backoffice (){
        $nav_items = Nav_item::first();
        $nav_links = Nav_link::all();
        return view('/pages/backoffice', compact('nav_items', 'nav_links'));
    }
}
