<?php

namespace App\Http\Controllers;

use App\Models\About_item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class About_itemController extends Controller

{
    public function index (){

        $columns = Schema::getColumnListing('about_items');
        $datas = About_item::all();

        return view('/pages/tables', compact('columns', 'datas'));
    }
}
