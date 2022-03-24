@extends('back/layouts/app')
@section('content')
    @include('back/partials/mobile')
    @include('back/partials/header')    
    <main id="main">
        <div class="back">
            <h1 class="text-center mx-auto">Edit About</h1>
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
            <form class="mx-5" action="{{route("about.update", $about_item->id)}}" method="post">
                @csrf
                <div class="mb-3">
                        <label for="strong" class="form-label">Strong</label>
                        <input type="text" class="form-control" id="strong" value="{{ $about_item->strong }}" name="strong">
                </div>
                <div class="mb-3">
                    <label for="span" class="form-label">Span</label>
                    <input type="text" class="form-control" id="span" value="{{ $about_item->span }}" name="span">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </main>
    @include('back/partials/footer')
@endsection
