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
        $columns = Schema::getColumnListing('banners');
        $item = Banner::find($id);
        $table = "banners";
        return view("back/pages/edit", compact("item", "columns", "table"));
    }
}
