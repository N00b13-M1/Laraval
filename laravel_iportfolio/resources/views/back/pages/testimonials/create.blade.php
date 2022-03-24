@extends('back/layouts/app')
@section('content')
    @include('back/partials/mobile')
    @include('back/partials/header')    
    <main id="main">
        <div class="back">
            <h1 class="text-center mx-auto">Create Testimonial</h1>
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
            <form class="mx-5" action="{{route("testimonials.store")}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="delay" class="form-label">Delay</label>
                    <input type="number" class="form-control" id="language" name="delay">
                </div>
                <div class="mb-3">
                    <label for="quote" class="form-label">Quote</label>
                    <input type="text" class="form-control" id="quote" name="quote">
                </div>
                <div class="mb-3">
                    <label for="picture" class="form-label">Picture</label>
                    <input type="text" class="form-control" id="picture" name="picture">
                </div>
                <div class="mb-3">
                    <label for="h4" class="form-label">H4</label>
                    <input type="text" class="form-control" id="h4" name="h4">
                </div>
                <div class="mb-3">
                    <label for="h3" class="form-label">H3 </label>
                    <input type="text" class="form-control" id="h3" name="h3">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </main>
    @include('back/partials/footer')
@endsection
