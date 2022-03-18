@extends('back/layouts/app')
@section('content')
    @include('back/partials/mobile')
    @include('back/partials/header')
    <main id="main">
        <div class="back d-flex">
            <h1 class="text-center m-auto">Welcome to the Back-end</h1>
        </div>
    </main>
    @include('back/partials/footer')
@endsection
