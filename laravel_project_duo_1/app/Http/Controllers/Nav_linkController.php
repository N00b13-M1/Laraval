<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nav_link;
use Illuminate\Support\Facades\Schema;

class Nav_linkController extends Controller
{
    public function index(){

        $table = "nav_links";
        $columns = Schema::getColumnListing('nav_links');
        $datas= Nav_link::all();

        return view('back/pages/tables',compact('columns', 'datas', 'table'));
    }
    public function destroy($id){
        $item = Nav_link::find($id);
        $item->delete();
        return redirect()->back();
    }

    public function edit($id){
        $table = "nav_links";
        $columns = Schema::getColumnListing('nav_links');
        array_shift($columns);
        array_pop($columns);
        array_pop($columns);
        $item = Nav_link::find($id);
        return view("back/pages/edit", compact("item", "columns", "table"));
    }

    public function update(Request $request, $id){
        $columns = Schema::getColumnListing('nav_links');
        array_shift($columns);
        array_pop($columns);
        array_pop($columns);
        $item = Nav_link::find($id);
        
        foreach ($columns as $column) {
            $item[$column] = $request[$column];
        }
        $item->save();
        return view("back/pages/backoffice");
        // return redirect()->back()->back();
    }

    public function create(){
        $table = "nav_links";
        $columns = Schema::getColumnListing('nav_links');
        array_shift($columns);
        array_pop($columns);
        array_pop($columns);
        return view("back/pages/create", compact ("table", "columns"));
    }

    public function store(Request $request){
        $columns = Schema::getColumnListing('nav_links');
        array_shift($columns);
        array_pop($columns);
        array_pop($columns);
        $item = new Nav_link();
        
        foreach ($columns as $column) {
            $item[$column] = $request[$column];
        }
        $item->save();


        return view("back/pages/backoffice");
    }
}
