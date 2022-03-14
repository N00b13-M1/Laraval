@extends('back/layouts.app')
@section('content')
    @include('back/partials.navbar2')
    <div class="container">
        <h2>Create Users<h2>
        <form class="mx-5" action="{{ route("$table.store")}}" method="post">
            @csrf
            @foreach ($columns as $column)
                <div class="mb-3">
                    <label for="{{ $column }}" class="form-label">{{ $column }}</label>
                    <input type="text" class="form-control" id="{{ $column }}" name="{{ $column }}">
                </div>
            @endforeach
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

