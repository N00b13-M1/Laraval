<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use App\Models\Feature;

class FeatureController extends Controller
{
    public function index(){

        $columns = Schema::getColumnListing('features');
        $datas = Feature::all();

        return view('/pages/tables', compact('columns','datas'));
    }
}
