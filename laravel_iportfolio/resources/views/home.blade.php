@extends('front/layouts/app')
@section('content')
    @include('front/partials/mobile')
    @include('front/partials/header')
    @include('front/partials/hero')
    <main id="main">
        @include('front/partials/about')
        @include('front/partials/facts')
        @include('front/partials/skills')
        {{-- @include('front/partials/resume') --}}
        @include('front/partials/portfolio')
        @include('front/partials/services')
        @include('front/partials/testimonials')
        @include('front/partials/contact')
    </main><!-- End #main -->
    @include('front/partials/footer')
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
@endsection