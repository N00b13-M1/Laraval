<?php

namespace App\Http\Controllers;

use App\Models\Testimonial_item;
use Illuminate\Http\Request;

class TestimonialItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonial_items = Testimonial_item::all();
        return view("back.pages.testimonials.testimonials", compact("testimonial_items"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("back.pages.testimonials.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $testimonial_item = new Testimonial_item();
        $testimonial_item->delay = $request->delay;
        $testimonial_item->quote = $request->quote;
        $testimonial_item->picture = $request->picture;
        $testimonial_item->h4 = $request->h4;
        $testimonial_item->h3 = $request->h3;

        $testimonial_item->save();
        return redirect()->route('testimonials.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial_item  $testimonial_item
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial_item $testimonial_item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial_item  $testimonial_item
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonial_item = Testimonial_item::find($id);
        return view("back.pages.testimonials.edit", compact ('testimonial_item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial_item  $testimonial_item
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $testimonial_item = Testimonial_item::find('$id');
        $testimonial_item->delay = $request->delay;
        $testimonial_item->quote = $request->quote;
        $testimonial_item->picture = $request->picture;
        $testimonial_item->h4 = $request->h4;
        $testimonial_item->h3 = $request->h3;

        $testimonial_item->save();
        return redirect()->route('testimonials.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial_item  $testimonial_item
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial_item = Testimonial_item::find($id);
        $testimonial_item->delete();
        return redirect()->back();
    }
}

