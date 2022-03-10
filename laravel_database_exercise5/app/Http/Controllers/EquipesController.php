<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipe;

class EquipesController extends Controller
{
    public function index(){
        $equipes = Equipe::all();
        return view('/pages/equipes',compact('equipes'));
    }
}
