<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    public function index (){
        $data = Testimonial::all();
        return view('home', compact('data'));
    }
}
