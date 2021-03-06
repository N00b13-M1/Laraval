@extends('back/layouts/app')
@section('content')
    @include('back/partials/mobile')
    @include('back/partials/header')    
    <main id="main">
        <div class="back">
            <h1 class="text-center mx-auto">Create Facts</h1>
            @if (session()->has('message'))
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
            @endif
            <form class="mx-5" action="{{route("facts.store")}}" method="post">
                @csrf
                <div class="mb-3">
                        <label for="icon" class="form-label">Icon</label>
                        <input type="text" class="form-control" id="icon" name="icon">
                </div>
                <div class="mb-3">
                    <label for="number" class="form-label">Number</label>
                    <input type="number" class="form-control" id="Number" name="number">
                </div>
                <div class="mb-3">
                    <label for="strong" class="form-label">Strong</label>
                    <input type="text" class="form-control" id="Strong" name="strong">
                </div>
                <div class="mb-3">
                    <label for="p" class="form-label">P</label>
                    <input type="text" class="form-control" id="p" name="p">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </main>
    @include('back/partials/footer')
@endsection
