<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Title;
use Illuminate\Support\Facades\Schema;

class TitleController extends Controller
{
    public function index(){

        $columns = Schema::getColumnListing('titles');
        $datas= Title::all();

        return view('/pages/tables',compact('columns', 'datas'));
    }
}
