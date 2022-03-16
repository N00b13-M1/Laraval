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
        return view("back.pages.cars.edit", compact('car'));
    }

    public function update($id, Request $request)
    {
        $car = Car::find($id);
        $car->make = $request->make;
        $car->year = $request->year;
        $car->color = $request->color;
        $car->prix = $request->prix;
        $car->reduction = $request->reduction;

        $car->save();
        return redirect()->route('cars.index');
    }

    public function create()
    {
        return view("back.pages.cars.create");
    }

    public function store(Request $request)
    {
        $car = new Car;
        $car->make = $request->make;
        $car->year = $request->year;
        $car->color = $request->color;
        $car->prix = $request->prix;
        $car->reduction = $request->reduction;

        $car->save();
        return redirect()->route('cars.index');
    }
}
