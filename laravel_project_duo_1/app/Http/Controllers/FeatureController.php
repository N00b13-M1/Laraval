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

        return view('/pages/tables', compact('columns','datas', 'table'));
    }

    public function destroy($id){
        $item = Feature::find($id);
        $item->delete();
        return redirect()->back();
    }
}
