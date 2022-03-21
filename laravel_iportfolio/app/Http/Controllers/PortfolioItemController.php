<?php

namespace App\Http\Controllers;

use App\Models\Portfolio_item;
use Illuminate\Http\Request;

class PortfolioItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio_items = Portfolio_item::all();
        return view("back.pages.portfolio.portfolio", compact("portfolio_items"));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //4334r34r4334r3
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
     * @param  \App\Models\Portfolio_item  $portfolio_item
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio_item $portfolio_item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio_item  $portfolio_item
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio_item $portfolio_item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio_item  $portfolio_item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio_item $portfolio_item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio_item  $portfolio_item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio_item $portfolio_item)
    {
        //
    }
}
