@extends('back/layouts/app')
@section('content')
    @include('back/partials/mobile')
    @include('back/partials/header')
    <main id="main">
        <div class="back">
            <h1 class="text-center mx-auto">About Table</h1>
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
                        <th scope='col'>Strong</th>
                        <th scope='col'>Span</th>
                        <th scope='col'><i class='bx bx-edit fs-4'></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($about_items as $about)
                        <tr>
                            <th scope='row'>{{ $about->id }}</th>
                            <td>{{ $about->strong }}</td>
                            <td>{{ $about->span }}</td> 
                            <td>
                                <a class='btn btn-primary' href='{{ route('about.edit', $about->id) }}'
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
