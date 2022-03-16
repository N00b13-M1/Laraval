@extends('back/layouts.app')
@section('content')
    @include('back/partials.navbar')
    <div class="container">
        <h1 class="text-center">Article Create Page</h1>
        <form class="mx-5" action="{{ route('articles.store') }}" method="post">
            @csrf
            <div class="mb-3">
                    <label for="nameArticle" class="form-label">Name</label>
                    <input type="text" class="form-control" id="nameArticle" name="name">
            </div>
            <div class="mb-3">
                <label for="descriptionArticle" class="form-label">Description</label>
                <input type="text" class="form-control" id="descriptionArticle" name="description">
            </div>
            <div class="mb-3">
                <label for="authorArticle" class="form-label">Author</label>
                <input type="text" class="form-control" id="authorArticle" name="author">
            </div>
            <div class="mb-3">
                <label for="publication_dateArticle" class="form-label">Publication date</label>
                <input type="date" class="form-control" id="publication_dateArticle" name="publication_date">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection