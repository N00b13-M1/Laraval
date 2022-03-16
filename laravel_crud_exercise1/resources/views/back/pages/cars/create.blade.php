@extends('back/layouts.app')
@section('content')
    @include('back/partials.navbar')
    <div class="container edit">
        <h1 class="text-center">Cars Create Page</h1>
        <form class="mx-5" action="{{route("cars.store")}}" method="post">
            @csrf
            <div class="mb-3">
                    <label for="makeCar" class="form-label">Name</label>
                    <input type="text" class="form-control" id="makeCar" name="make">
            </div>
            <div class="mb-3">
                <label for="yearCar" class="form-label">Year</label>
                <input type="date" class="form-control" id="yearCar" name="year">
            </div>
            <div class="mb-3">
                <label for="colorCar" class="form-label">Color</label>
                <input type="text" class="form-control" id="colorCar" name="color">
            </div>
            <div class="mb-3">
                <label for="prixCar" class="form-label">Prix</label>
                <input type="number" class="form-control" id="prixCar" name="prix">
            </div>
            <div class="mb-3">
                <label for="reductionCar" class="form-label">Reduction</label>
                <input type="number" class="form-control" id="reductionCar" name="reduction">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection