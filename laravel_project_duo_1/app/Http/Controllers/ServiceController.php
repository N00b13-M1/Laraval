<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Schema;

class ServiceController extends Controller
{
    public function index(){

        $columns = Schema::getColumnListing('services');
        $datas = Service::all();

        return view('/pages/tables',compact('columns', 'datas'));
    }   
}
