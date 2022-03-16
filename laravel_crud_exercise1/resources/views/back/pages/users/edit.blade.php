@extends('back/layouts.app')
@section('content')
    @include('back/partials.navbar')
    <div class="container edit">
        <h1 class="text-center">Users Edit Page</h1>
        <form class="mx-5" action="{{ route('users.update', $user->id) }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="nameUser" class="form-label">Name</label>
                <input type="text" class="form-control" id="nameUser" value="{{ $user->name }}" name="name">
            </div>
            <div class="mb-3">
                <label for="given_nameUser" class="form-label">Given Name</label>
                <input type="text" class="form-control" id="given_nameUser" value="{{ $user->given_name }}"
                    name="given_name">
            </div>
            <div class="mb-3">
                <label for="emailUser" class="form-label">Email</label>
                <input type="email" class="form-control" id="emailUser" value="{{ $user->email }}" name="email">
            </div>
            <div class="mb-3">
                <label for="passwordUser" class="form-label">Password</label>
                <input type="text" class="form-control" id="passwordUser" value="{{ $user->password }}" name="password">
            </div>
            <div class="mb-3">
                <label for="image_pathUser" class="form-label">Image_path</label>
                <input type="text" class="form-control" id="image_pathUser" value="{{ $user->image_path }}"
                    name="image_path">
            </div>
            <div class="mb-3">
                <label for="roleUser" class="form-label">Role</label>
                <input type="text" class="form-control" id="roleUser" value="{{ $user->role }}" name="role">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
