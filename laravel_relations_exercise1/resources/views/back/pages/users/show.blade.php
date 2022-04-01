@extends('back/layouts.app')
@section('content')
    @include('back/partials/navbar')
    <div class="row test text-center d-flex justify-content-center align-items-start">
        <h1>Edit User</h1>
        <form class="mx-5" action="{{ route('users.index')}}" method="get">
            @csrf
            <div class="mb-3">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" class="form-control w-50 mx-auto" id="last_name" value="{{ $user->last_name }}" name="last_name" readonly>
            </div>
            <div class="mb-3">
                <label for="given_name" class="form-label">Given Name</label>
                <input type="text" class="form-control w-50 mx-auto" id="given_name" value="{{ $user->given_name }}" name="given_name" readonly>
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control w-50 mx-auto" id="age" value="{{ $user->age }}" name="age" readonly>
            </div>
            <div class="mb-3">
                <label for="date_of_birth" class="form-label">DoB</label>
                <input type="date" class="form-control w-50 mx-auto" id="date_of_birth" value="{{ $user->date_of_birth }}" name="date_of_birth" readonly>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control w-50 mx-auto" id="email" value="{{ $user->email }}" name="email" readonly>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="text" class="form-control w-50 mx-auto" id="password" value="{{ $user->password }}" name="password" readonly>
            </div>
            <div class="mb-3">
                <label for="genre" class="form-label">Genre</label>
                <input type="text" class="form-control w-50 mx-auto" id="genre" value="{{ $user->genre }}" name="genre" readonly>
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Position</label>
                <input type="text" class="form-control w-50 mx-auto" id="role" value="{{ $user->role->position}}" name="role" readonly>
            </div>
            <button type="submit" class="btn btn-primary my-3">Return</button>
        </form>
    </div>
    @include('back/partials/footer')
@endsection