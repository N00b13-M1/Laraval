@extends('back/layouts.app')
@section('content')
    @include('back/partials.navbar')
    <div class="container edit">
        <h1 class="text-center">Article Edit Page</h1>
        <form class="mx-5" action="{{route("articles.update", $article->id)}}" method="post">
            @csrf
            <div class="mb-3">
                    <label for="nameArticle" class="form-label">Name</label>
                    <input type="text" class="form-control" id="nameArticle" value="{{ $article->name }}" name="name">
            </div>
            <div class="mb-3">
                <label for="descriptionArticle" class="form-label">Description</label>
                <input type="text" class="form-control" id="descriptionArticle" value="{{ $article->description }}" name="description">
            </div>
            <div class="mb-3">
                <label for="authorArticle" class="form-label">Author</label>
                <input type="text" class="form-control" id="authorArticle" value="{{ $article->author }}" name="author">
            </div>
            <div class="mb-3">
                <label for="publication_dateArticle" class="form-label">Publication date</label>
                <input type="date" class="form-control" id="publication_dateArticle" value="{{ $article->publication_date }}" name="publication_date">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection


