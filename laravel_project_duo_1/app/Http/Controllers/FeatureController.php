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
        $table = "features";
        $columns = Schema::getColumnListing('features');
        array_shift($columns);
        array_pop($columns);
        array_pop($columns);
        $item = Feature::find($id);
        return view("back/pages/edit", compact("item", "columns", "table"));
    }

    public function update(Request $request, $id){
        $columns = Schema::getColumnListing('features');
        array_shift($columns);
        array_pop($columns);
        array_pop($columns);
        $item = Feature::find($id);
        
        foreach ($columns as $column) {
            $item[$column] = $request[$column];
        }
        $item->save();
        return view("back/pages/backoffice");
        // return redirect()->back()->back();
    }

    public function create(){
        $table = "features";
        $columns = Schema::getColumnListing('features');
        array_shift($columns);
        array_pop($columns);
        array_pop($columns);
        return view("back/pages/create", compact ("table", "columns"));
    }

    public function store(Request $request){
        $columns = Schema::getColumnListing('features');
        array_shift($columns);
        array_pop($columns);
        array_pop($columns);
        $item = new Feature();
        
        foreach ($columns as $column) {
            $item[$column] = $request[$column];
        }
        $item->save();


        return view("back/pages/backoffice");
    }
}
