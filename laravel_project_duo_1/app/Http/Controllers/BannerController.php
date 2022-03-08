<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use App\Models\Banner;

class BannerController extends Controller
{
    public function index(){

        $columns = Schema::getColumnListing('banners');
        $datas = Banner::all();

        return view('/pages/tables', compact('columns','datas'));
    }
}
