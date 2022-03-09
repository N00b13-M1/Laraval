<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use App\Models\Banner;

class BannerController extends Controller
{
    public function index(){

        $table = "banners";
        $columns = Schema::getColumnListing('banners');
        $datas = Banner::all();

        return view('/pages/tables', compact('columns','datas', 'table'));
    }
    public function destroy($id){
        $item = Banner::find($id);
        $item->delete();
        return redirect()->back();
    }
}
