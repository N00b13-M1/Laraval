<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nav_item;

class Nav_itemController extends Controller
{
    public function index (){
        $data = Nav_item::all();
        return view('home', compact('data'));
    }
}
