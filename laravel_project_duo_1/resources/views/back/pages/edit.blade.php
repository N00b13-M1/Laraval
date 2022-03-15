@extends('back/layouts.app')
@section('content')
    @include('back/partials.navbar2')
    <div class="container edit">
        <form class="mx-5" action="/update/{{ $table }}/{{ $item->id }}" method="post">
            @csrf
            @foreach ($columns as $column)
                <div class="mb-3">
                    <label for="{{ $column }}" class="form-label">{{ $column }}</label>
                    <input type="text" class="form-control" id="{{ $column }}" name="{{ $column }}" value="{{ $item[$column] }}">
                </div>
            @endforeach
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

