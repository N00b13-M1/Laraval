<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Role;
use app\Models\User;

class HomeController extends Controller
{
    public function index(){
        return view("home");
    }
}
