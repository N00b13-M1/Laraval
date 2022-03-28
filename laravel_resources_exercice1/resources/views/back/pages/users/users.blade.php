@extends('back/layouts.app')
@section('content')
    @include('back/partials/aside')
    <main class="main-content position-relative max-height-vh-100 border-radius-lg">
        <div class="container-fluid py-4">
            @include('back/partials/navbar')
            <div class="row test text-center d-flex justify-content-center align-items-start">
                <h1>Users table page</h1>
                <a class='btn btn-success w-25' href='{{ route('users.create') }}'
                                role='button'>Create</a>
                                
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" class="text-dark fs-4">#</th>
                            <th scope="col" class="text-dark fs-4">Last name</th>
                            <th scope="col" class="text-dark fs-4">Given Name</th>
                            <th scope="col" class="text-dark fs-4">Age</th>
                            <th scope="col" class="text-dark fs-4">DoB</th>
                            <th scope="col" class="text-dark fs-4">Email</th>
                            <th scope="col" class="text-dark fs-4">Password</th>
                            <th scope="col" class="text-dark fs-4"><i class="fa-solid fa-glasses"></i></th>
                            <th scope="col" class="text-dark fs-4"><i class="fa-solid fa-pen-to-square"></i></th>
                            <th scope="col" class="text-dark fs-4"><i class="fa-solid fa-trash-can"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $item)
                        <tr>
                            <th scope="row">{{ $item->id }}</th>
                            <th>{{ $item->lastName }}</th>
                            <th>{{ $item->givenName }}</th>
                            <th>{{ $item->age }}</th>
                            <th>{{ $item->date_of_birth }}</th>
                            <th>{{ $item->email }}</th>
                            <th>{{ $item->password }}</th>
                            <th>
                                <a class='btn btn-warning' href=''
                                role='button'>Read</a>
                            </th>
                            <th>
                                <a class='btn btn-primary' href="{{ route("users.edit", $item->id)}}"
                                role="button">Edit</a>
                                {{-- <form action="{{ route("users.edit", $item->id) }}" method="get">
                                    @csrf
                                    <button class="btn btn-primary" type="submit">Edit</button>
                                </form> --}}
                            </th>
                            {{-- <th><a class='btn btn-danger' href='{{ route("users.destroy", $item->id)}}'
                                role='button'>Delete</a> --}}
                            <th>
                                <form action="{{ route("users.destroy", $item->id) }}" method="post">
                                    @csrf
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @include('back/partials/footer')
        </div>
    </main>
@endsection
