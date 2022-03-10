<?php

namespace App\Http\Controllers;

use App\Models\About_item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class About_itemController extends Controller

{
    public function index (){

        $table = "about_items";
        $columns = Schema::getColumnListing('about_items');
        $datas = About_item::all();

        return view('back/pages/tables', compact('columns', 'datas', 'table'));
    }
    public function destroy($id){
        $item = About_item::find($id);
        $item->delete();
        return redirect()->back();
    }

    public function edit($id){
        $item = About_item::find($id);
        return view("back/pages/edit", compact("item"));
    }

    public function update($id){
        
    }
}


