@extends('back/layouts/app')
@section('content')
    @include('back/partials/mobile')
    @include('back/partials/header')    
    <main id="main">
        <div class="back">
            <h1 class="text-center mx-auto">Edit Skill</h1>
            {{-- @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
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
            <form class="mx-5" action="{{route("skills.update", $skills_item->id)}}" method="post">
                @csrf
                <div class="mb-3">
                        <label for="language" class="form-label">Language</label>
                        <input type="text" class="form-control" id="language" value="{{ $skills_item->language }}" name="language">
                </div>
                <div class="mb-3">
                    <label for="percentage" class="form-label">Percentage</label>
                    <input type="text" class="form-control" id="percentage" value="{{ $skills_item->percentage }}" name="percentage">
                </div>
                <div class="mb-3">
                    <label for="value" class="form-label">Value </label>
                    <input type="number" class="form-control" id="value" value="{{ $skills_item->value }}" name="value">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </main>
    @include('back/partials/footer')
@endsection
