@extends('back/layouts.app')
@section('content')
    @include('back/partials/navbar')
    <div class="row test text-center d-flex justify-content-center align-items-start">
        <h1>Upload Image</h1>
        @if ($errors->any())
            <div class="alert alert-danger w-75 text-center">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="mx-5" action="{{ route('photos.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="img" class="form-label">Last Name</label>
                <input type="text" class="form-control w-50 mx-auto" id="img" name="img">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    @include('back/partials/footer')
@endsection
