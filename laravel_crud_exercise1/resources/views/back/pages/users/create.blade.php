@extends('back/layouts.app')
@section('content')
    @include('back/partials.navbar')
    <div class="container edit">
        <h1 class="text-center">Users Create Page</h1>
        @if (session()->has('message'))
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
    @endif
        
        <form class="mx-5" action="{{ route('users.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="nameUser" class="form-label">Name</label>
                <input type="text" class="form-control" id="nameUser" name="name">
            </div>
            <div class="mb-3">
                <label for="given_nameUser" class="form-label">Given Name</label>
                <input type="text" class="form-control" id="given_nameUser"
                    name="given_name">
            </div>
            <div class="mb-3">
                <label for="emailUser" class="form-label">Email</label>
                <input type="email" class="form-control" id="emailUser" name="email">
            </div>
            <div class="mb-3">
                <label for="passwordUser" class="form-label">Password</label>
                <input type="text" class="form-control" id="passwordUser" name="password">
            </div>
            <div class="mb-3">
                <label for="image_pathUser" class="form-label">Image_path</label>
                <input type="text" class="form-control" id="image_pathUser"
                    name="image_path">
            </div>
            <div class="mb-3">
                <label for="roleUser" class="form-label">Role</label>
                <input type="text" class="form-control" id="roleUser" name="role">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection