<?php

namespace App\Http\Controllers;

use App\Models\Nav_link;
use Illuminate\Http\Request;

class NavLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $nav_links = Nav_link::all();
        // return view("back.pages.navbar.navbar", compact("nav_links"));
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
     * @param  \App\Models\Nav_link  $nav_link
     * @return \Illuminate\Http\Response
     */
    public function show(Nav_link $nav_link)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nav_link  $nav_link
     * @return \Illuminate\Http\Response
     */
    public function edit(Nav_link $nav_link)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nav_link  $nav_link
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nav_link $nav_link)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nav_link  $nav_link
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nav_link $nav_link)
    {
        //
    }
}
