@extends('back/layouts/app')
@section('content')
    @include('back/partials/mobile')
    @include('back/partials/header')
    <main id="main">
        <div class="back d-flex">
            <h1 class="text-center m-auto">Navbar Table</h1>
            <h2>Section1 - Header </h2>
            <table class='table'>
                <thead>
                    <tr>
                        <th scope='col'>#</th>
                        <th scope='col'>Icon</th>
                        <th scope='col'>Number</th>
                        
                    </tr>
                    {{-- @foreach ($nav_headshots as $headshot)
                    @endforeach --}}
            <h2>Section2 - Links </h2>
            <h2>Section3 - Socials </h2>
        </div>
    </main>
    @include('back/partials/footer')
@endsection
