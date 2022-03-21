<?php

namespace App\Http\Controllers;

use App\Models\Contact_item;
use Illuminate\Http\Request;

class ContactItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact_items = Contact_item::all();
        return view("back.pages.contact.contact", compact("contact_items"));
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
     * @param  \App\Models\Contact_item  $contact_item
     * @return \Illuminate\Http\Response
     */
    public function show(Contact_item $contact_item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact_item  $contact_item
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact_item = Contact_item::find($id);
        return view("back.pages.contact.edit", compact('contact_item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact_item  $contact_item
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $contact_item = Contact_item::find($id);
        $contact_item->icon = $request->icon;
        $contact_item->title = $request->title;
        $contact_item->description = $request->description;

        $contact_item->save();
        return redirect()->route('contact.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact_item  $contact_item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact_item $contact_item)
    {
        //
    }
}
