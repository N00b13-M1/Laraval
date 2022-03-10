<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;

class PortfoliosController extends Controller
{
    public function index(){
        $portfolios = Portfolio::all();
        return view('/pages/portfolios',compact('portfolios'));
    }
}
