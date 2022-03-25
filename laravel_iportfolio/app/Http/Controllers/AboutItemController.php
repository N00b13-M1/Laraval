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
            // dd($about_items[0]->strong);
            return view("back.pages.about.about", compact("about_items"));
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
    public function edit($id)
    {
        $about_item = About_item::find($id);
        return view("back.pages.about.edit", compact('about_item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About_item  $about_item
     * @return \Illuminate\Http\Response
     */

    public function update($id, Request $request)
    {
        $about_item = About_item::find($id);
        $about_item->strong = $request->strong;
        $about_item->span = $request->span;

        $about_item->save();
        return redirect()->route('about.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About_item  $about_item
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }
}

