<?php

namespace App\Http\Controllers;

use App\Models\Skills_item;
use Illuminate\Http\Request;

class SkillsItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills_items = Skills_item::all();
        return view("back.pages.skills.skills", compact("skills_items"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Skills_item  $skills_item
     * @return \Illuminate\Http\Response
     */
    public function show(Skills_item $skills_item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Skills_item  $skills_item
     * @return \Illuminate\Http\Response
     */
    public function edit(Skills_item $skills_item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Skills_item  $skills_item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skills_item $skills_item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Skills_item  $skills_item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skills_item $skills_item)
    {
        //
    }
}
