<?php

namespace App\Http\Controllers;

use App\Models\NavHeadshot;
use App\Models\Nav_link;
use App\Models\Nav_social;
use Illuminate\Http\Request;

class NavHeadshotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $navheadshot = NavHeadshot::first();
        $nav_links = Nav_link::all();
        $nav_socials = Nav_social::all();
        return view("back.pages.navbar.navbar", compact("navheadshot", "nav_links","nav_socials"));
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
     * @param  \App\Models\NavHeadshot  $navHeadshot
     * @return \Illuminate\Http\Response
     */
    public function show(NavHeadshot $navHeadshot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NavHeadshot  $navHeadshot
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $navheadshot = NavHeadshot::find($id);
        $nav_link = Nav_link::find($id);
        $nav_social = Nav_social::find($id);
        // dd($navheadshot);
        return view("back.pages.navbar.edit", compact("navheadshot", "nav_link","nav_social"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NavHeadshot  $navHeadshot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NavHeadshot $navHeadshot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NavHeadshot  $navHeadshot
     * @return \Illuminate\Http\Response
     */
    public function destroy(NavHeadshot $navHeadshot)
    {
        //
    }
}
