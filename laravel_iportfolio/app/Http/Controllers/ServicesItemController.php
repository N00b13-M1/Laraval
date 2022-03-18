<?php

namespace App\Http\Controllers;

use App\Models\Services_item;
use Illuminate\Http\Request;

class ServicesItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services_items = Services_item::all();
        return view("back.pages.services", compact("services_items"));
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
     * @param  \App\Models\Services_item  $services_item
     * @return \Illuminate\Http\Response
     */
    public function show(Services_item $services_item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Services_item  $services_item
     * @return \Illuminate\Http\Response
     */
    public function edit(Services_item $services_item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Services_item  $services_item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Services_item $services_item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Services_item  $services_item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Services_item $services_item)
    {
        //
    }
}
