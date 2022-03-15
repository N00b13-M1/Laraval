@extends('back/layouts.app')
@section('content')
        @include('back/partials/navbar')
        <section class="bg-warning">
                <h1 class="text-center">Articles Table</h1>
        </section>
        <section>
                <div class="container bg-secondary">
                        <table class="table table-condensed">
                                <thead>
                                        <tr>
                                        <th>ID</th>
                                        <th>Nom</th>
                                        <th>Description</th>
                                        <th>Author</th>
                                        <th>Date_Published</th>
                                        <th>Delete</th>
                                        <th>Edit</th>
                                        </tr>
                                </thead>
                                @foreach ($articles as $article)
                                <tbody>
                                        <tr>    
                                                <td>{{ $article->id }}</td>
                                                <td>{{ $article->name}}</td>
                                                <td>{{ $article->description }}</td>
                                                <td>{{ $article->author}}</td>
                                                <td>{{ $article->publication_date}}</td>
                                                <td>
                                                <form action="{{ route("articles.destroy", $article->id) }}" method="post">
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
