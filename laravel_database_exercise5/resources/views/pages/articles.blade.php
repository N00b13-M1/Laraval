@extends('layouts.app')
@section('content')
    @include('partials.nav')
    <section class="bg-warning">
        <h1 class="text-center">Welcome to Articles table page</h1>
    </section>
    <section>
        <div class="container">
            <table class="table table-condensed">
                @foreach ($articles as $item)
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Date_Published</th>
                            <th>Content</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nom }}</td>
                            <td>{{ $item->prenom }}</td>
                            <td>{{ $item->date_published}}</td>
                            <td>{{ $item->content}}</td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    <section>
    @include('partials.footer')
@endsection