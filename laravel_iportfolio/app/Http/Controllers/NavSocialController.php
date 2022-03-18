<?php

namespace App\Http\Controllers;

use App\Models\Nav_social;
use Illuminate\Http\Request;

class NavSocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nav_socials = Nav_social::all();
        return view("back.pages.navbar", compact("nav_socials"));
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
     * @param  \App\Models\Nav_social  $nav_social
     * @return \Illuminate\Http\Response
     */
    public function show(Nav_social $nav_social)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nav_social  $nav_social
     * @return \Illuminate\Http\Response
     */
    public function edit(Nav_social $nav_social)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nav_social  $nav_social
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nav_social $nav_social)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nav_social  $nav_social
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nav_social $nav_social)
    {
        //
    }
}
