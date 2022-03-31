<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Role;
use app\Models\User;

class BackController extends Controller
{
    public function index(){
        return view("back/pages/back");
    }
}
