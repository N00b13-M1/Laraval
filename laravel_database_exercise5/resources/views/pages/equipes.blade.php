@extends('layouts.app')
@section('content')
    @include('partials.nav')
    <section class="bg-warning">
        <h1 class="text-center">Welcome to our Equipes table page</h1>
    </section>
    <section>
        <div class="container">
            <table class="table table-condensed">
                @foreach ($equipes as $item)
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Ville</th>
                            <th>Commune</th>
                            <th># of Players</th>
                            <th># of Posts</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nom }}</td>
                            <td>{{ $item->ville }}</td>
                            <td>{{ $item->commune}}</td>
                            <td>{{ $item->number_of_players }}</td>
                            <td>{{ $item->number_of_posts }}</td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    <section>
    @include('partials.footer')
@endsection