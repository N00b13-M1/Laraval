<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Schema;

class ServiceController extends Controller
{
    public function index(){

        $table = "services";
        $columns = Schema::getColumnListing('services');
        $datas = Service::all();

        return view('back/pages/tables',compact('columns', 'datas', 'table'));
    }   

    public function destroy($id){
        $item = Service::find($id);
        $item->delete();
        return redirect()->back();
    }

    public function edit($id){
        $table = "services";
        $columns = Schema::getColumnListing('services');
        array_shift($columns);
        array_pop($columns);
        array_pop($columns);
        $item = Service::find($id);
        return view("back/pages/edit", compact("item", "columns", "table"));
    }

    public function update(Request $request, $id){
        $columns = Schema::getColumnListing('services');
        array_shift($columns);
        array_pop($columns);
        array_pop($columns);
        $item = Service::find($id);
        
        foreach ($columns as $column) {
            $item[$column] = $request[$column];
        }
        $item->save();
        return view("back/pages/backoffice");
        // return redirect()->back()->back();
    }

    public function create(){
        $table = "services";
        $columns = Schema::getColumnListing('services');
        array_shift($columns);
        array_pop($columns);
        array_pop($columns);
        return view("back/pages/create", compact ("table", "columns"));
    }

    public function store(Request $request){
        $columns = Schema::getColumnListing('services');
        array_shift($columns);
        array_pop($columns);
        array_pop($columns);
        $item = new Service();
        
        foreach ($columns as $column) {
            $item[$column] = $request[$column];
        }
        $item->save();


        return view("back/pages/backoffice");
    }
}
