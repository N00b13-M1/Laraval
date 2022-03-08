<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nav_link;
use Illuminate\Support\Facades\Schema;

class Nav_linkController extends Controller
{
    public function index(){

        $columns = Schema::getColumnListing('nav_links');
        $datas= Nav_link::all();

        return view('/pages/tables',compact('columns', 'datas'));
    }
}
