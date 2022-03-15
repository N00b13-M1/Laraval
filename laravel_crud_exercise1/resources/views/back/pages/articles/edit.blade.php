@extends('back/layouts.app')
@section('content')
    @include('back/partials.navbar')
    <div class="container edit">
        <h1 class="text-center">Article Edit Page</h1>
        <form class="mx-5" action="" method="post">
            @csrf
            @foreach ($articles as $article)
                <div class="mb-3">
                    <label for="{{ $article }}" class="form-label">{{ $article }}</label>
                    <input type="text" class="form-control" id="{{ $article }}" name="{{ $article }}"
                        value="">
                </div>
            @endforeach
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection


dfdbdfbdfbdfbdfbfdbdfbfdbfdbddbdf