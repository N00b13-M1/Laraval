@extends('back/layouts/app')
@section('content')
    @include('back/partials/mobile')
    @include('back/partials/header')    
    <main id="main">
        <div class="back">
            <h1 class="text-center mx-auto">Create Portfolio</h1>
            {{-- @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}
            <form class="mx-5" action="{{route("portfolio.store")}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="filter" class="form-label">Filter</label>
                    <input type="text" class="form-control" id="filter" name="filter">
            </div>
            <div class="mb-3">
                <label for="source" class="form-label">Source</label>
                <input type="text" class="form-control" id="source" name="source">
            </div>
            <div class="mb-3">
                <label for="href1" class="form-label">Href 1</label>
                <input type="text" class="form-control" id="href1" name="href1">
            </div>
            <div class="mb-3">
                <label for="title1" class="form-label">Title 1</label>
                <input type="text" class="form-control" id="title1" name="title1">
            </div>
            <div class="mb-3">
                <label for="href2" class="form-label">Href 2</label>
                <input type="text" class="form-control" id="href2" name="href2">
            </div>
            <div class="mb-3">
                <label for="title2" class="form-label">Title 2</label>
                <input type="text" class="form-control" id="title2" name="title2">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </main>
    @include('back/partials/footer')
@endsection
