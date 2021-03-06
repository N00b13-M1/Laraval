<?php

namespace App\Http\Controllers;

use App\Models\Portfolio_item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
        return view("back.pages.portfolio.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $portfolio_item = new Portfolio_item();
        $portfolio_item->filter = $request->filter;
        $portfolio_item->source = $request->file("source")->hashName();
        $portfolio_item->href1 = $request->href1;
        $portfolio_item->title1 = $request->title1;
        $portfolio_item->href2 = $request->href2;
        $portfolio_item->title2 = $request->title2;

        $portfolio_item->save();
        $request->file("source")->storePublicly("img", "public");
        return redirect()->route('portfolio.index');
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
    public function edit($id)
    {
        $portfolio_item = Portfolio_item::find($id);
        return view("back.pages.portfolio.edit", compact('portfolio_item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio_item  $portfolio_item
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $portfolio_item = Portfolio_item::find($id);
        $chemin = 'img/' . $portfolio_item->source;
        if (File::exists($chemin)) {
            # code...
            File::delete($chemin);
        }


        $portfolio_item->filter = $request->filter;
        $portfolio_item->source = $request->file("source")->hashName();

        $portfolio_item->href1 = $request->href1;
        $portfolio_item->title1 = $request->title1;
        $portfolio_item->href2 = $request->href2;
        $portfolio_item->title2 = $request->title2;
        $portfolio_item->save();
        $request->file("source")->storePublicly("img", "public");
        return redirect()->route('portfolio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * $\Response
     */
    public function destroy($id)
    {
        $portfolio_item = Portfolio_item::find($id);
        // $image_path = public_path().'/'.$portfolio_item->filename;
        // unlink($image_path);
        // $destination = "img/" . $portfolio_item->source;
        // if (File::exists($destination)) 
        // {
        //     File::delete($destination);
        // }
        $portfolio_item->delete();
        return redirect()->back();
    }
}

