<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;


class DashController extends Controller
{
    public function index(){
    $players = Player::all();
    $teams = Team::all();
    return view('front.pages.dash', compact('players', 'teams'));
    }
}

