@extends('back/layouts/app')
@section('content')
    @include('back/partials/mobile')
    @include('back/partials/header')    
    <main id="main">
        <div class="back">
            <h1 class="text-center mx-auto">Edit Testimonial</h1>
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            @if (session()->has('failure'))
            <div class="alert alert-danger">
                {{ session()->get('failure') }}
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
            <form class="mx-5" action="{{route("testimonials.update", $testimonial_item->id)}}" method="post">
                @csrf
                <div class="mb-3">
                        <label for="delay" class="form-label">Delay</label>
                        <input type="number" class="form-control" id="language" value="{{ $testimonial_item->delay }}" name="delay">
                </div>
                <div class="mb-3">
                    <label for="quote" class="form-label">Quote</label>
                    <input type="text" class="form-control" id="quote" value="{{ $testimonial_item->quote }}" name="delay">
                </div>
                <div class="mb-3">
                    <label for="picture" class="form-label">Picture</label>
                    <input type="text" class="form-control" id="picture" value="{{ $testimonial_item->picture }}" name="picture">
                </div>
                <div class="mb-3">
                    <label for="h4" class="form-label">H4</label>
                    <input type="text" class="form-control" id="h4" value="{{ $testimonial_item->h4 }}" name="h4">
                </div>
                <div class="mb-3">
                    <label for="h3" class="form-label">H3 </label>
                    <input type="text" class="form-control" id="h3" value="{{ $testimonial_item->h3 }}" name="h3">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </main>
    @include('back/partials/footer')
@endsection
