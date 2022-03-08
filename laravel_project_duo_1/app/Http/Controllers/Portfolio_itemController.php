<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio_item;
use Illuminate\Support\Facades\Schema;

class Portfolio_itemController extends Controller
{
    public function index(){

        $columns = Schema::getColumnListing('portfolio_items');
        $datas= Portfolio_item::all();

        return view('/pages/tables',compact('columns', 'datas'));
    }
}