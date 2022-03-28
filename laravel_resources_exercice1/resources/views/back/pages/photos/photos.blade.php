@extends('back/layouts.app')
@section('content')
    @include('back/partials/aside')
    <main class="main-content position-relative max-height-vh-100 border-radius-lg">
        <div class="container-fluid py-4">
            @include('back/partials/navbar')
            <div class="row test text-center d-flex justify-content-center align-items-start">
                <h1>Photos table page</h1>
                <a class='btn btn-success w-25' href=''
                role='button'>Create</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" class="text-dark fs-4">#</th>
                            <th scope="col" class="text-dark fs-4">Name</th>
                            <th scope="col" class="text-dark fs-4">Link</th>
                            <th scope="col" class="text-dark fs-4">Name of Album</th>
                            <th scope="col" class="text-dark fs-4"><i class="fa-solid fa-glasses"></i></th>
                            <th scope="col" class="text-dark fs-4"><i class="fa-solid fa-pen-to-square"></i></th>
                            <th scope="col" class="text-dark fs-4"><i class="fa-solid fa-trash-can"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($photos as $item)
                        <tr>
                            <th scope="row">{{ $item->id }}</th>
                            <th>{{ $item->name }}</th>
                            <th>{{ $item->link }}</th>
                            <th>{{ $item->name_of_album }}</th>
                            <th><a class='btn btn-warning' href=''
                                role='button'>Read</a></th>
                            <th><a class='btn btn-primary' href=''
                                role='button'>Edit</a></th>
                            <th><a class='btn btn-danger' href=''
                                role='button'>Delete</a></th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @include('back/partials/footer')
        </div>
    </main>
@endsection




