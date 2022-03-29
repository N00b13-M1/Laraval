@extends('back/layouts.app')
@section('content')
    @include('back/partials/navbar')
    <section class="bg-warning">
        <h2 class="text-center">Users Table</h2>
    </section>
    <section>
        <form action="{{ route('users.create') }}" method="get" class="text-center m-2">
            <button class="btn btn-success" type="submit">Create User</button>
        </form>
        <div class="container bg-secondary">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Last Name</th>
                        <th>Given Name</th>
                        <th>Age</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>DoB</th>
                        <th>Genre</th>
                        <th>Role</th>
                        <th>Created at</th>
                        <th>Read</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                @foreach ($users as $user)
                    <tbody>
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->last_name }}</td>
                            <td>{{ $user->given_name }}</td>
                            <td>{{ $user->age }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->password }}</td>
                            <td>{{ $user->date_of_birth }}</td>
                            <td>{{ $user->genre }}</td>
                            <td>{{ $user->role->last_name }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td>
                                <form action="{{ route('users.read', $user->id) }}" method="get">
                                    @csrf
                                    <button class="btn btn-warning" type="submit">Read</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route('users.edit', $user->id) }}" method="get">
                                    @csrf
                                    <button class="btn btn-primary" type="submit">Edit</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                    @csrf
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
        {{-- Alert Testimonial Added --}}
        @if (session()->has('success'))
            <div class="alert alert-success w-25 mx-auto m-3">
                <p>{{ session()->get('success') }}</p>
            </div>
        @endif
        {{-- Alert Testimonial Updated --}}
        @if (session()->has('update'))
            <div class="alert alert-warning w-25 mx-auto m-3">
                <p>{{ session()->get('update') }}</p>
            </div>
        @endif
        {{-- Alert Testimonial Deleted --}}
        @if (session()->has('delete'))
            <div class="alert alert-danger w-25 mx-auto m-3">
                <p>{{ session()->get('delete') }}</p>
            </div>
        @endif
        <section>
    @include('back/partials/footer')
@endsection
