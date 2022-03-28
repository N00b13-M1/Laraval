@extends('back/layouts.app')
@section('content')
    @include('back/partials/navbar')
    <div class="row test text-center d-flex justify-content-center align-items-start">
        <h1>Edit Readme</h1>
        <form class="mx-5" action="{{ route('roles.index')}}" method="get">
            @csrf
            <div class="mb-3">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" class="form-control w-50 mx-auto" id="last_name" value="{{ $role->last_name }}" name="last_name" readonly>
            </div>
            <button type="submit" class="btn btn-primary">Go back</button>
        </form>
    </div>
    @include('back/partials/footer')
@endsection