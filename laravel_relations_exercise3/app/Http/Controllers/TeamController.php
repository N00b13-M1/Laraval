<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Position;
use App\Models\Player;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $list = array('hc1wXBL7zCsdfMu', '10', 'dhdsfHddfD','otheridshere');
        // dd(in_array(10, $list));
        $teams = Team::all();


        return view("back.pages.teams.teams",compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('back.pages.teams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'city' => 'required',
            'country' => 'required',
            'number_players' => 'required',
            'number_forwards' => 'required',
            'number_midfielders' => 'required',
            'number_defenders' => 'required',
            'number_substitutes' => 'required',
        ]);
        
        $team = new Team();
        $team->name = $request->name;
        $team->city = $request->city;
        $team->country = $request->country;
        $team->number_players = $request->number_players;
        $team->number_forwards = $request->number_forwards;
        $team->number_midfielders = $request->number_midfielders;
        $team->number_defenders = $request->number_defenders;
        $team->number_substitutes = $request->number_substitutes;
        $team->save();
        return redirect()->route('teams.index')->with("success", "Successfully added");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $team = Team::find($id);
        return view('back.pages.teams.show',compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $team = Team::find($id);
        return view('back.pages.teams.edit',compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'city' => 'required',
            'country' => 'required',
            'number_players' => 'required',
            'number_forwards' => 'required',
            'number_midfielders' => 'required',
            'number_defenders' => 'required',
            'number_substitutes' => 'required',
        ]);
        
        $team = Team::find($id);
        $team->name = $request->name;
        $team->city = $request->city;
        $team->country = $request->country;
        $team->number_players = $request->number_players;
        $team->number_forwards = $request->number_forwards;
        $team->number_midfielders = $request->number_midfielders;
        $team->number_defenders = $request->number_defenders;
        $team->number_substitutes = $request->number_substitutes;
        $team->save();
        return redirect()->route('teams.index')->with("update", "Successfully Updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id )
    {
        $team = Team::find($id);
        $team->delete();
        return redirect()->back()->with("delete", "Successfully Deleted");
    }
}
