@extends('back/layouts.app')
@section('content')
        @include('back/partials/navbar')
        <section class="bg-warning">
                <h1 class="text-center">Cars Table</h1>
        </section>
        <section>
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
                                @foreach ($cars as $item)
                                <tbody>
                                        <tr>    
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->make}}</td>
                                            <td>{{ $item->year }}</td>
                                            <td>{{ $item->color}}</td>
                                            <td>{{ $item->prix}}</td>
                                            <td>{{ $item->reduction}}%</td>
                                            <td>
                                                <form action="{{ route("cars.destroy", $item->id) }}" method="post">
                                                        @csrf
                                                        <button class="btn btn-danger" type="submit">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                </tbody>
                                @endforeach
                        </table>
                </div>
        <section>
@endsection