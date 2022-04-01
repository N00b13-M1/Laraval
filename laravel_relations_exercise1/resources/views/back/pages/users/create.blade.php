@extends('back/layouts.app')
@section('content')
    @include('back/partials/navbar')
    <div class="row test text-center d-flex justify-content-center align-items-start">
        <h1>Create User</h1>
        @if ($errors->any())
            <div class="alert alert-danger w-75 text-center">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="mx-5" action="{{ route('users.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" class="form-control w-50 mx-auto" id="last_name" name="last_name">
            </div>
            <div class="mb-3">
                <label for="given_name" class="form-label">Given Name</label>
                <input type="text" class="form-control w-50 mx-auto" id="given_name" name="given_name">
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control w-50 mx-auto" id="age" name="age">
            </div>
            <div class="mb-3">
                <label for="date_of_birth" class="form-label">DoB</label>
                <input type="date" class="form-control w-50 mx-auto" id="date_of_birth" name="date_of_birth">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control w-50 mx-auto" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="text" class="form-control w-50 mx-auto" id="password" name="password">
            </div>
            <div class="mb-3">
                <label for="genre" class="form-label">Genre</label>
                <input type="text" class="form-control w-50 mx-auto" id="genre" name="genre">
            </div>
            <div>
                <select name="role_id" class="form-control w-50 mx-auto">
                    <option>Select Role</option>
                    <!--selected by default-->
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}">
                            {{ $role->position }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary my-3">Submit</button>
        </form>
    </div>
    @include('back/partials/footer')
@endsection
