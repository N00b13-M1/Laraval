<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Footer_item;

class Footer_itemController extends Controller
{
    public function index (){
        $data = Footer_item::all();
        return view('home', compact('data'));
    }
}
