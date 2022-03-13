<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use App\Models\Feature;

class FeatureController extends Controller
{
    public function index(){

        $table = 'features';
        $columns = Schema::getColumnListing('features');
        $datas = Feature::all();

        return view('back/pages/tables', compact('columns','datas', 'table'));
    }

    public function destroy($id){
        $item = Feature::find($id);
        $item->delete();
        return redirect()->back();
    }

    public function edit($id){
        $table = 'features';
        $columns = Schema::getColumnListing('features');
        $item = Feature::find($id);
        return view("back/pages/edit", compact("item", "columns", "table"));
    }
}
