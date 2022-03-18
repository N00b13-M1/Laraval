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
        return view("back.pages.testimonials", compact("testimonial_items"));
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
    public function edit(Testimonial_item $testimonial_item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial_item  $testimonial_item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial_item $testimonial_item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial_item  $testimonial_item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial_item $testimonial_item)
    {
        //
    }
}
