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
        $table = 'nav_items';
        $columns = Schema::getColumnListing('nav_items');
        $item = Nav_item::find($id);
        return view("back/pages/edit", compact("item", "columns", "table"));
    }
}
