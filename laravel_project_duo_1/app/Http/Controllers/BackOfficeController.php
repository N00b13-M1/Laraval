<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Nav_item;
use App\Models\Nav_link;


class BackOfficeController extends Controller
{
    public function backoffice (){
        $nav_items = Nav_item::first();
        $nav_links = Nav_link::all();
        return view('back/pages/backoffice', compact('nav_items', 'nav_links'));
    }
}
