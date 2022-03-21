@extends('back/layouts/app')
@section('content')
    @include('back/partials/mobile')
    @include('back/partials/header')
    <main id="main">
        <div class="back">
            <h1 class="text-center mx-auto">Contact Table</h1>
            {{-- @if (session()->has('message'))
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
            @endif --}}
            <table class='table'>
                <thead>
                    <tr>
                        <th scope='col'>#</th>
                        <th scope='col'>Icon</th>
                        <th scope='col'>Title</th>
                        <th scope='col'>Description</th>
                        <th scope='col'><i class='bx bx-edit fs-4'></i></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contact_items as $contact_item)
                        <tr>
                            <th scope='row'>{{ $contact_item->id }}</th>
                            <td>{{ $contact_item->icon }}</td>
                            <td>{{ $contact_item->title }}</td>
                            <td>{{ $contact_item->description }}</td>
                            <td>
                                <a class='btn btn-primary' href='{{ route('contact.edit', $contact_item->id) }}'
                                    role='button'>Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
    @include('back/partials/footer')
@endsection
