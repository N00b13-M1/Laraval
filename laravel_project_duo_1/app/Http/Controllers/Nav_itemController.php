<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nav_item;
use Illuminate\Support\Facades\Schema;

class Nav_itemController extends Controller
{
    public function index(){

        $table = 'nav_items';
        $columns = Schema::getColumnListing('nav_items');
        $datas= Nav_item::all();

        return view('back/pages/tables',compact('columns', 'datas', 'table'));
    }

    public function destroy($id){
        $item = Nav_item::find($id);
        $item->delete();
        return redirect()->back();
    }

    public function edit($id){
        $table = "nav_items";
        $columns = Schema::getColumnListing('nav_items');
        array_shift($columns);
        array_pop($columns);
        array_pop($columns);
        $item = Nav_item::find($id);
        return view("back/pages/edit", compact("item", "columns", "table"));
    }

    public function update(Request $request, $id){
        $columns = Schema::getColumnListing('nav_items');
        array_shift($columns);
        array_pop($columns);
        array_pop($columns);
        $item = Nav_item::find($id);
        
        foreach ($columns as $column) {
            $item[$column] = $request[$column];
        }
        $item->save();
        return view("back/pages/backoffice");
        // return redirect()->back()->back();
    }

    public function create(){
        $table = "nav_items";
        $columns = Schema::getColumnListing('nav_items');
        array_shift($columns);
        array_pop($columns);
        array_pop($columns);
        return view("back/pages/create", compact ("table", "columns"));
    }

    public function store(Request $request){
        $columns = Schema::getColumnListing('nav_items');
        array_shift($columns);
        array_pop($columns);
        array_pop($columns);
        $item = new Nav_item();
        
        foreach ($columns as $column) {
            $item[$column] = $request[$column];
        }
        $item->save();


        return view("back/pages/backoffice");
    }
}
