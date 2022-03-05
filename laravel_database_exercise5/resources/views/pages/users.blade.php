@extends('layouts.app')
@section('content')
    @include('partials.nav')
    <section class="bg-warning">
        <h1 class="text-center">Welcome to our Users table page</h1>
    </section>
    <section>
        <div class="container">
            <table class="table table-condensed">
                @foreach ($users as $item)
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Age</th>
                            <th>Email</th>
                            <th>Pays</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nom }}</td>
                            <td>{{ $item->prenom }}</td>
                            <td>{{ $item->age }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->pays }}</td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    <section>
    @include('partials.footer')
@endsection
