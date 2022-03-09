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

        return view('/pages/tables',compact('columns', 'datas', 'table'));
    }   

    public function destroy($id){
        $item = Service::find($id);
        $item->delete();
        return redirect()->back();
    }
}
