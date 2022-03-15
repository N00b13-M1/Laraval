@extends('back/layouts.app')
@section('content')
    @include('back/partials.navbar2')
    <div class="container create">
        <h2 class="text-center">Create Users<h2>
        @if ($errors->any())
            <div class="text-center w-75 mx-auto alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
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

