@extends('back/layouts/app')
@section('content')
    @include('back/partials/mobile')
    @include('back/partials/header')
    <main id="main">
        <div class="back d-flex bg-success">
            <h1 class="text-center m-auto">Welcome to the Back-end {{ 1+1 }}</h1>
        </div>
    </main>
    @include('back/partials/footer')
@endsection
