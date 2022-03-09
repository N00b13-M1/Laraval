<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio_item;
use Illuminate\Support\Facades\Schema;

class Portfolio_itemController extends Controller
{
    public function index(){

        $table= "portfolio_items";
        $columns = Schema::getColumnListing('portfolio_items');
        $datas= Portfolio_item::all();

        return view('/pages/tables',compact('columns', 'datas', 'table'));
    }

    public function destroy($id){
        $item = Portfolio_item::find($id);
        $item->delete();
        return redirect()->back();
    }
}