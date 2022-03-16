@extends('back/layouts.app')
@section('content')
        @include('back/partials/navbar')
        <section class="bg-warning">
                <h1 class="text-center">Cars Table</h1>
        </section>
        <section>
                <form action="{{ route('cars.create') }}" method="get" class="text-center m-2">
        
                        <button class="btn btn-success" type="submit">Create</button>
                </form>
                <div class="container bg-secondary">
                        <table class="table table-condensed">
                                <thead>
                                        <tr>
                                        <th>ID</th>
                                        <th>Make</th>
                                        <th>Year</th>
                                        <th>Color</th>
                                        <th>Prix</th>
                                        <th>Reduction</th>
                                        <th>Delete</th>
                                        <th>Edit</th>
                                        </tr>
                                </thead>
                                @foreach ($cars as $car)
                                <tbody>
                                        <tr>    
                                        <td>{{ $car->id }}</td>
                                        <td>{{ $car->make}}</td>
                                        <td>{{ $car->year }}</td>
                                        <td>{{ $car->color}}</td>
                                        <td>{{ $car->prix}}</td>
                                        <td>{{ $car->reduction}}%</td>
                                        <td>
                                                <form action="{{ route("cars.destroy", $car->id) }}" method="post">
                                                        @csrf
                                                        <button class="btn btn-danger" type="submit">Delete</button>
                                                </form>
                                        </td>
                                        <td>
                                                <form action="{{ route("cars.edit", $car->id) }}" method="get">
                                                        @csrf
                                                        <button class="btn btn-primary" type="submit">Edit</button>
                                                </form>
                                        </td>

                                        </tr>
                                </tbody>
                                @endforeach
                        </table>
                </div>
        <section>
@endsection
