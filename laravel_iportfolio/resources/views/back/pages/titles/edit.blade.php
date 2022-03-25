@extends('back/layouts/app')
@section('content')
    @include('back/partials/mobile')
    @include('back/partials/header')    
    <main id="main">
        <div class="back">
            <h1 class="text-center mx-auto">Edit Testimonial</h1>
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
            <form class="mx-5" action="{{route("titles.update", $title->id)}}" method="post">
                @csrf
                <div class="mb-3">
                        <label for="main_title" class="form-label">Main Title</label>
                        <input type="text" class="form-control" id="main_title" value="{{ $title->main_title }}" name="main_title">
                </div>
                <div class="mb-3">
                    <label for="sub_title" class="form-label">Sub Title</label>
                    <input type="text" class="form-control" id="sub_title" value="{{ $title->sub_title }}" name="sub_title">
                </div>
                <div class="mb-3">
                    <label for="sub_title2" class="form-label">Sub Title 2</label>
                    <input type="text" class="form-control" id="sub_title2" value="{{ $title->sub_title2 }}" name="sub_title2">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </main>
    @include('back/partials/footer')
@endsection
