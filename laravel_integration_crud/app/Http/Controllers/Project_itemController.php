<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project_item;

class Project_itemController extends Controller
{
    public function index (){
        $data = Project_item::all();
        return view('home', compact('data'));
    }
}
