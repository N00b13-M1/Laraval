<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Player;
use App\Models\Position;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $players = DB::table('players')->paginate(5);
        $players = Player::paginate(5);
        return view('back.pages.players.players', compact("players"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $positions = Position::all();
        return view('back.pages.players.create', compact("positions"));
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
            'last_name' => 'required',
            'given_name' => 'required',
            'age' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'country_of_origin' => 'required',
            'position_id' => 'required',
        ]);
        
        $player = new Player();
        $player->last_name = $request->last_name;
        $player->given_name = $request->given_name;
        $player->age = $request->age;
        $player->telephone = $request->telephone;
        $player->email = $request->email;
        $player->gender = $request->gender;
        $player->country_of_origin = $request->country_of_origin;
        $player->position_id = $request->position_id;
        $player->save();
        $photo = new Photo();
        $photo->img = $request->img;
        $photo->player_id = $player->id;
        $photo->save();

        return redirect()->route('positions.index')->with("success", "Successfully added");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function show( $id )
    {
        $player = Player::find($id);
        return view('back.pages.players.show', compact("player"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $player = Player::find($id);
        $positions = Position::all();
        // $photo = Photo::find($id);
        // $team = Team::find($id);
        return view('back.pages.players.edit', compact('player', "positions"));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $player = Player::find($id);
        $player->last_name = $request->last_name;
        $player->given_name = $request->given_name;
        $player->age = $request->age;
        $player->telephone = $request->telephone;
        $player->email = $request->email;
        $player->gender = $request->gender;
        $player->country_of_origin = $request->country_of_origin;
        $player->position_id = $player->position_id;
        $player->save();
        return redirect()->route('players.index')->with("update", "Successfully Updated");
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $player = Player::find($id);
        $photo = Photo::find($id);
        $photo->delete();
        $player->delete();
        return redirect()->back()->with("delete", "Successfully Deleted");
    }
}
