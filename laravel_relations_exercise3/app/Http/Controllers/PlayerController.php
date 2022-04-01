<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::all();
        return view('back.pages.players.players', compact("players"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.pages.players.create');
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
            'genre' => 'required',
            'country_of_origin' => 'required',
            'position_id' => 'required',
        ]);
        
        $player = new Player();
        $player->last_name = $request->last_name;
        $player->given_name = $request->given_name;
        $player->age = $request->age;
        $player->telephone = $request->telephone;
        $player->email = $request->email;
        $player->genre = $request->genre;
        $player->country_of_origin = $request->country_of_origin;
        $player->position_id = $player->position_id;
        $player->save();
        $photo= new Photo();
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
        return view('back.pages.players.edit', compact('player'));
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
        $player->genre = $request->genre;
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
        $player->delete();
        return redirect()->back()->with("delete", "Successfully Deleted");
    }
}
