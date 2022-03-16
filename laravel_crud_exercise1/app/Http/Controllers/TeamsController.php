<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamsController extends Controller
{
    public function index()
    {
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

    public function edit($id)
    {
        $team = Team::find($id);
        return view("back.pages.teams.edit", compact('team'));
    }

    public function update($id, Request $request)
    {
        $team = Team::find($id);
        $team->name = $request->name;
        $team->number = $request->number;
        $team->coach_name = $request->coach_name;
        $team->position = $request->position;

        $team->save();
        return redirect()->route('teams.index');
    }

    public function create()
    {
        return view("back.pages.teams.create");
    }

    public function store(Request $request)
    {
        $team = new Team;
        $team->name = $request->name;
        $team->number = $request->number;
        $team->coach_name = $request->coach_name;
        $team->position = $request->position;

        $team->save();
        return redirect()->route('teams.index');
    }
}
