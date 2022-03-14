<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Title;
use Illuminate\Support\Facades\Schema;

class TitleController extends Controller
{
    public function index(){

        $table = "titles";
        $columns = Schema::getColumnListing('titles');
        $datas= Title::all();

        return view('back/pages/tables',compact('columns', 'datas', 'table'));
    }

    public function destroy($id){
        $item = Title::find($id);
        $item->delete();
        return redirect()->back();
    }

    public function edit($id){
        $table = "titles";
        $columns = Schema::getColumnListing('titles');
        array_shift($columns);
        array_pop($columns);
        array_pop($columns);
        $item = Title::find($id);
        return view("back/pages/edit", compact("item", "columns", "table"));
    }

    public function update(Request $request, $id){
        $columns = Schema::getColumnListing('titles');
        array_shift($columns);
        array_pop($columns);
        array_pop($columns);
        $item = Title::find($id);
        
        foreach ($columns as $column) {
            $item[$column] = $request[$column];
        }
        $item->save();
        return view("back/pages/backoffice");
        // return redirect()->back()->back();
    }

    public function create(){
        $table = "titles";
        $columns = Schema::getColumnListing('titles');
        array_shift($columns);
        array_pop($columns);
        array_pop($columns);
        return view("back/pages/create", compact ("table", "columns"));
    }

    public function store(Request $request){
        $columns = Schema::getColumnListing('titles');
        array_shift($columns);
        array_pop($columns);
        array_pop($columns);
        $item = new Title();
        
        foreach ($columns as $column) {
            $item[$column] = $request[$column];
        }
        $item->save();


        return view("back/pages/backoffice");
    }
}

