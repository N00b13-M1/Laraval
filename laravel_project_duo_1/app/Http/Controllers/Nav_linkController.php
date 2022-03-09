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
}
