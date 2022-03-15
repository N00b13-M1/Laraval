@extends('back/layouts.app')
@section('content')
        @include('back/partials/navbar')
        <section class="bg-warning">
                <h1 class="text-center">Users Table</h1>
        </section>
        <section>
                <div class="container bg-secondary">
                <table class="table table-condensed">
                        <thead>
                        <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Given Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Image Path</th>
                                <th>Role</th>
                                <th>Delete</th>
                                <th>Edit</th>
                        </tr>
                        </thead>
                        @foreach ($users as $item)
                        <tbody>
                                <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->given_name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->password }}</td>
                                <td>{{ $item->image_path }}</td>
                                <td>{{ $item->role }}</td>
                                <td>
                                        <form action="{{ route("users.destroy", $item->id) }}" method="post">
                                                @csrf
                                                <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                </td>
                                <td>
                                        <form action="{{ route("users.edit", $item->id) }}" method="get">
                                                @csrf
                                                <button class="btn btn-primary" type="submit">Edit</button>
                                        </form>
                                </td>
                                </tr>
                        </tbody>
                        @endforeach
                </table>
                </div>
        <section>
@endsection
