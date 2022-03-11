<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nav_link;

class Nav_linkController extends Controller
{
    public function index (){
        $data = Nav_link::all();
        return view('home', compact('data'));
    }
}
