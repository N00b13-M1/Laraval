@extends('layouts.app')
@section('content')
    @include('partials.header')
    <section class="container d-flex justify-content-center">
        <div class="card m-3" style="width: 18rem;">
            <img src="./img/img.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </section>

    @include('partials.footer')
@endsection
