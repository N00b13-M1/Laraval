<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Business_item;

class Business_itemController extends Controller
{
    public function index (){
        $data = Business_item::all();
        return view('home', compact('data'));
    }
}
