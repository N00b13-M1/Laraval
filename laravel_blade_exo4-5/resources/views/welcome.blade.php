@extends('layouts.app')
@section('content')
    @include('partials.header')
    <div class="banner container mx-auto">
        <div class="row p-5 py-2">
            <div class="col-12 p-0">
                <h1 class="">{{$title}} Subheading</h1>
                <p class="bg-secondary p-3"><span class="text-primary">Home<span> / {{$title}} </p>
            </div>
        </div>
    </div>
    <section class="container">
        <div class="row p-5 py-2">
            <p class="p-0 m-0">
                {{ url()->current() }} {{ url()->current() }} {{ url()->previous() }}
            </p>
            <div class="col-12 p-5 bg-secondary text-center">
                <h3 class="text-white">Hello CodingSchool</h3>
                <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est dolorem quaerat ad quas!</p>
                <p class="text-white">It uses utility for typogrpahy and spacing to space content out within the larger container</p>
                <a href="{{ "/about" }}" class="btn btn-primary">About</a>
            </div>
        </div>
        <div class="row p-5 py-2 text-center">
            <h5>Bonus :</h5>
            <p><span class="fw-bold">Url actuelle : <span>{{ url()->current() }}</p>
            <p><span class="fw-bold">Url précédent : <span>{{ url()->previous() }}</p>
        </div>
    </section>
    @include('partials.footer')
@endsection