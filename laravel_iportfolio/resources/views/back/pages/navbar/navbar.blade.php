@extends('back/layouts/app')
@section('content')
    @include('back/partials/mobile')
    @include('back/partials/header')
    <main id="main">
        <div class="back">
            <h1 class="text-center m-auto mb-5">Navbar Table</h1>
            <h2 class="">Section1 - Header </h2>
            <table class='table mb-5'>
                <thead>
                    <tr>
                        <th scope='col'>#</th>
                        <th scope='col'>Icon</th>
                        <th scope='col'>Name</th>
                        {{-- <th scope='col'><i class='bx bx-edit fs-4'></i></th> --}}
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope='row'>{{ $navheadshot->id }}</th>
                        <td>{{ $navheadshot->photo}}</td>
                        <td>{{ $navheadshot->title}}</td>
                        {{-- <td><form action="{{ route("navbar.edit", $navheadshot->id) }}" method="get">
                            @csrf
                            <button class="btn btn-primary" type="submit">Edit</button>
                        </form> --}}
                        </td>
                    </tr>
                </tbody>
            <table>
            <h2>Section2 - Links </h2>
            <table class='table mb-5'>
                <thead>
                    <tr>
                        <th scope='col'>#</th>
                        <th scope='col'>Href</th>
                        <th scope='col'>Logo</th>
                        <th scope='col'>Span</th>
                        {{-- <th scope='col'><i class='bx bx-edit fs-4'></i></th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($nav_links as $nav_link)    
                    <tr>
                        <th scope='row'>{{ $nav_link->id }}</th>
                        <td>{{ $nav_link->href}}</td>
                        <td>{{ $nav_link->logo}}</td>
                        <td>{{ $nav_link->span}}</td>
                        {{-- <td><form action="{{ route("navbar.edit", $nav_link->id) }}" method="get">
                            @csrf
                            <button class="btn btn-primary" type="submit">Edit</button>
                        </form> --}}
                    </tr>
                    @endforeach
                </tbody>
            <table>
            <h2>Section3 - Socials </h2>
            <table class='table mb-5'>
                <thead>
                    <tr>
                        <th scope='col'>#</th>
                        <th scope='col'>Href</th>
                        <th scope='col'>Icon</th> 
                        {{-- <th scope='col'><i class='bx bx-edit fs-4'></i></th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($nav_socials as $nav_social)    
                    <tr>
                        <th scope='row'>{{ $nav_social->id }}</th>
                        <td>{{  $nav_social->href   }}</td>
                        <td>{{  $nav_social->icon   }}</td>
                        {{-- <td><form action="{{ route("navbar.edit", $nav_social->id) }}" method="get">
                            @csrf
                            <button class="btn btn-primary" type="submit">Edit</button>
                        </form></td> --}}
                    </tr>
                    @endforeach
                </tbody>
            <table>
        </div>
    </main>
    @include('back/partials/footer')
@endsection
