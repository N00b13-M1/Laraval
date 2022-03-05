@extends('layouts.app')
@section('content')
    @include('partials.nav')
    <section class="bg-warning">
        <h1 class="text-center">Welcome to our Portfolios table page</h1>
    </section>
    <section>
        <div class="container">
            <table class="table table-condensed">
                @foreach ($portfolios as $item)
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Description</th>
                            <th>Image</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nom }}</td>
                            <td>{{ $item->description}}</td>
                            <td>{{ $item->image }}</td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    <section>
    @include('partials.footer')
@endsection