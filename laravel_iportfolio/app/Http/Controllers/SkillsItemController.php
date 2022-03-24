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
        return view("back.pages.skills.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $skills_item = new Skills_item();
        $skills_item->language = $request->language;
        $skills_item->percentage = $request->percentage;
        $skills_item->value = $request->value;

        $skills_item->save();
        return redirect()->route('skills.index');
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
    public function edit($id)
    {
        $skills_item = Skills_item::find($id);
        return view("back.pages.skills.edit", compact ('skills_item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Skills_item  $skills_item
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $skills_item = Skills_item::find($id);
        $skills_item->language = $request->language;
        $skills_item->percentage = $request->percentage;
        $skills_item->value = $request->value;

        $skills_item->save();
        return redirect()->route('skills.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Skills_item  $skills_item
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skills_item = Skills_item::find($id);
        $skills_item->delete();
        return redirect()->back();
    }
}
