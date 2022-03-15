<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamsController extends Controller
{
    public function index(){
        $teams = Team::all();
            return view("back.pages.teams.teams", compact("teams"));
    }
    public function destroy($id)
    {
        $team = Team::find($id);
        // dd($article[1]);
        $team->delete();
        return redirect()->back();
    }
}
