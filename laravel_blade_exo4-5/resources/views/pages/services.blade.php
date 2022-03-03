@extends('layouts.app')
@section('content')
    @include('partials.header')
    <div class="banner container mx-auto">
        <div class="row p-5 py-2">
            <div class="col-12 p-0">
                <h1 class="">{{$title3}} Subheading</h1>
                <p class="bg-secondary p-3"><span class="text-primary">Home<span> / {{$title3}} </p>
            </div>
        </div>
    </div>
    <section class="container mx-auto">
        <div class="row p-5 py-2">
            <div class="bg-secondary">
                <p class="text-white text-center my-auto fs-1 p-5">1200 x 300</p>
                <p class="text-white text-end">Powered by HTML.COM</p>
            </div>
        </div>
        <div class="row p-5 py-2">
            <div class="col-4 px-0">
                <div class="card">
                    <div class="card-header">
                        Card Title
                    </div>
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium doloremque ullam.</p>
                    </div>
                    <div class="card-footer text-muted">
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        Card Title
                    </div>
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni dolores nulla asperiores?</p>
                    </div>
                    <div class="card-footer text-muted">
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-4 px-0">
                <div class="card">
                    <div class="card-header">
                        Card Title
                    </div>
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe harum assumenda autem.</p>
                    </div>
                    <div class="card-footer text-muted">
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>

    </section>
    @include('partials.footer')
@endsection
