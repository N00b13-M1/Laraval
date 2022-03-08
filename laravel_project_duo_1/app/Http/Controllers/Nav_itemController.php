<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nav_item;
use Illuminate\Support\Facades\Schema;

class Nav_itemController extends Controller
{
    public function index(){

        $columns = Schema::getColumnListing('nav_items');
        $datas= Nav_item::all();

        return view('/pages/tables',compact('columns', 'datas'));
    }
}
