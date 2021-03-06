<?php

namespace App\Http\Controllers;

use App\Models\Facts_item;
use Illuminate\Http\Request;

class FactsItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facts_items = Facts_item::all();
        return view("back.pages.facts.facts", compact("facts_items"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("back.pages.facts.create");
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
            'icon' => 'required',
            'number' => 'required',
            'strong'=> 'required',
        ]);
        $facts_item = new Facts_item();
        $facts_item->icon = $request->icon;
        $facts_item->number = $request->number;
        $facts_item->strong = $request->strong;
        $facts_item->p = $request->p;

        $facts_item->save();
        return redirect()->route('facts.index')->with("success", "Successfully added");
    }

    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Facts_item  $facts_item
     * @return \Illuminate\Http\Response
     */
    public function show(Facts_item $facts_item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Facts_item  $facts_item
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $facts_item = Facts_item::find($id);
        return view("back.pages.facts.edit", compact('facts_item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Facts_item  $facts_item
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $validated = $request->validate([
            'icon' => 'required',
            'number' => 'required',
            'strong'=> 'required',
        ]);

        $facts_item = Facts_item::find($id);
        $facts_item->icon = $request->icon;
        $facts_item->number = $request->number;
        $facts_item->strong = $request->strong;
        $facts_item->p = $request->p;

        $facts_item->save();
        return redirect()->route('facts.index')->with("update", "Successfully Updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Facts_item  $facts_item
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $facts_item = Facts_item::find($id);
        $facts_item->delete();
        return redirect()->back()->with("delete", "Successfully Deleted");
    }
}

