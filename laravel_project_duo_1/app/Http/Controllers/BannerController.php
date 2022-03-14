<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use App\Models\Banner;

class BannerController extends Controller
{
    
    public function index(){
        
        $columns = Schema::getColumnListing('banners');
        $table = "banners";
        $datas = Banner::all();

        return view('back/pages/tables', compact('columns','datas', 'table'));
    }
    public function destroy($id){
        $item = Banner::find($id);
        $item->delete();
        return redirect()->back();
    }


    public function edit($id){
        $table = "banners";
        $columns = Schema::getColumnListing('banners');
        array_shift($columns);
        array_pop($columns);
        array_pop($columns);
        $item = Banner::find($id);
        return view("back/pages/edit", compact("item", "columns", "table"));
    }

    public function update(Request $request, $id){
        $columns = Schema::getColumnListing('banners');
        array_shift($columns);
        array_pop($columns);
        array_pop($columns);
        $item = Banner::find($id);
        
        foreach ($columns as $column) {
            $item[$column] = $request[$column];
        }
        $item->save();
        return view("back/pages/backoffice");
        // return redirect()->back()->back();
    }

    public function create(){
        $table = "banners";
        $columns = Schema::getColumnListing('banners');
        array_shift($columns);
        array_pop($columns);
        array_pop($columns);
        return view("back/pages/create", compact ("table", "columns"));
    }

    public function store(Request $request){
        $columns = Schema::getColumnListing('banners');
        array_shift($columns);
        array_pop($columns);
        array_pop($columns);
        $item = new Banner();
        
        foreach ($columns as $column) {
            $item[$column] = $request[$column];
        }
        $item->save();


        return view("back/pages/backoffice");
    }
}
