@extends('back/layouts.app')
@section('content')
    @include('back/partials/aside')
    <main class="main-content position-relative max-height-vh-100 border-radius-lg">
        <div class="container-fluid py-4">
            @include('back/partials/navbar')
            <div class="row test text-center d-flex justify-content-center align-items-start">
                <h1>Edit User</h1>
                <form class="mx-5" action="{{ route('users.update', $user->id) }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control w-50 mx-auto" id="lastName" value="{{ $user->lastName }}" name="lastName">
                    </div>
                    <div class="mb-3">
                        <label for="givenName" class="form-label">Given Name</label>
                        <input type="text" class="form-control w-50 mx-auto" id="givenName" value="{{ $user->givenName }}" name="givenName">
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label">Age</label>
                        <input type="number" class="form-control w-50 mx-auto" id="age" value="{{ $user->age }}" name="age">
                    </div>
                    <div class="mb-3">
                        <label for="date_of_birth" class="form-label">DoB</label>
                        <input type="date" class="form-control w-50 mx-auto" id="date_of_birth" value="{{ $user->date_of_birth }}" name="date_of_birth">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control w-50 mx-auto" id="email" value="{{ $user->email }}" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="text" class="form-control w-50 mx-auto" id="password" value="{{ $user->password }}" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        @include('back/partials/footer')
    </main>
@endsection