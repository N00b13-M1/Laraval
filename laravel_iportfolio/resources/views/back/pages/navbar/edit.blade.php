@extends('back/layouts/app')
@section('content')
    @include('back/partials/mobile')
    @include('back/partials/header')    
    <main id="main">
        <div class="back">
            <h1 class="text-center mx-auto">Navbar Edits</h1>

            {{-- <form class="mx-5 headshot mb-5" action="{{route("navbar.update", $navheadshot->id)}}" method="post">
                @csrf
                <div class="mb-3">
                        <label for="icon" class="form-label">Icon</label>
                        <input type="text" class="form-control" id="icon" value="{{ $navheadshot->icon }}" name="icon">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="Name" value="{{ $navheadshot->name }}" name="name">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form> --}}
            {{-- <form class="mx-5 links mb-5" action="{{route("navbar.update", $nav_link->id)}}" method="post">
                @csrf
                <div class="mb-3">
                        <label for="icon" class="form-label">Href</label>
                        <input type="text" class="form-control" id="icon" value="{{ $nav_link->href }}" name="href">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Logo</label>
                    <input type="text" class="form-control" id="Name" value="{{ $nav_link->logo }}" name="logo">
                </div>
                <div class="mb-3">
                    <label for="icon" class="form-label">Span</label>
                    <input type="text" class="form-control" id="icon" value="{{ $nav_link->span }}" name="span">
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form> --}}
            <form class="mx-5 soicals mb-5" action="{{route("navbar.update", $nav_social->id)}}" method="post">
                @csrf
                <div class="mb-3">
                        <label for="href" class="form-label">Href</label>
                        <input type="text" class="form-control" id="href" value="{{ $nav_social->href }}" name="href">
                </div>
                <div class="mb-3">
                    <label for="icon" class="form-label">Icon</label>
                    <input type="text" class="form-control" id="icon" value="{{ $nav_social->icon }}" name="icon">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </main>
    @include('back/partials/footer')
@endsection



