<?php

namespace App\Http\Controllers;

use App\Models\About_item;
use Illuminate\Http\Request;


class AboutItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about_items = About_item::all();
            return view("back.pages.about", compact("about_items"));
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
     * @param  \App\Models\About_item  $about_item
     * @return \Illuminate\Http\Response
     */
    public function show(About_item $about_item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About_item  $about_item
     * @return \Illuminate\Http\Response
     */
    public function edit(About_item $about_item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About_item  $about_item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About_item $about_item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About_item  $about_item
     * @return \Illuminate\Http\Response
     */
    public function destroy(About_item $about_item)
    {
        //
    }
}
