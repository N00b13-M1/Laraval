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
        $table = "about_items";
        $columns = Schema::getColumnListing('about_items');
        array_shift($columns);
        array_pop($columns);
        array_pop($columns);
        $item = About_item::find($id);
        return view("back/pages/edit", compact("item", "columns", "table"));
    }

    public function update(Request $request, $id){
        $columns = Schema::getColumnListing('about_items');
        array_shift($columns);
        array_pop($columns);
        array_pop($columns);
        $item = About_item::find($id);
        
        foreach ($columns as $column) {
            $item[$column] = $request[$column];
        }
        $item->save();
        return view("back/pages/backoffice");
        // return redirect()->back()->back();
    }

    public function create(){
        $table = "about_items";
        $columns = Schema::getColumnListing('about_items');
        array_shift($columns);
        array_pop($columns);
        array_pop($columns);
        return view("back/pages/create", compact ("table", "columns"));
    }

    public function store(Request $request){
        $columns = Schema::getColumnListing('about_items');
        array_shift($columns);
        array_pop($columns);
        array_pop($columns);
        $item = new About_item();
        
        foreach ($columns as $column) {
            $item[$column] = $request[$column];
        }
        $item->save();


        return view("back/pages/backoffice");
    }
}


