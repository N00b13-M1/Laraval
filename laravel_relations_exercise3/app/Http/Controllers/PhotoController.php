<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::all();
        $photos = Photo::paginate(5);
        return view ('back.pages.photos.photos', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('back.pages.photos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'img' => 'required',
        ]);
        
        $photo = new Photo();
        $photo->img = $request->file("img")->hashName();
        $photo->save();

        $request->file("img")->storePublicly("img", "public");

        return redirect()->route('photos.index')->with("success", "Successfully added");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show( $id )
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit( $id )
    {
        $photo = Photo::find($id);
        return view("back.pages.photos.edit", compact('photo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $request->validate([
            'img' => 'required',
        ]);
        
        $photo = Photo::find($id);
        $path = 'img/' . $photo->img;
        if (File::exists($path)) {
            File::delete($path);
        }
        $photo->img = $request->file("img")->hashName();

        $photo->save();
        $request->file("img")->storePublicly("img", "public");

        return redirect()->route('photos.index')->with("update", "Successfully Updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id )
    {
        $photo = Photo::find($id);
        $path = 'img/' . $photo->img;
        if (File::exists($path)) {
            File::delete($path);
        }
        $photo->delete();
        return redirect()->back()->with("delete", "Successfully Deleted");
    }
}
