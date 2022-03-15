<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarsController extends Controller
{
    public function index(){
        $cars = Car::all();
            return view("back.pages.cars.cars", compact("cars"));
    }

    public function destroy($id)
    {
        $car = Car::find($id);
        // dd($article[1]);
        $car->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $car = Car::find($id);
        return view("back.pages.cars.edit");
    }
}
