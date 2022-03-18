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
        $fact_items = Facts_item::all();
        return view("back.pages.facts", compact("fact_items"));
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
    public function edit(Facts_item $facts_item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Facts_item  $facts_item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Facts_item $facts_item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Facts_item  $facts_item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Facts_item $facts_item)
    {
        //
    }
}
