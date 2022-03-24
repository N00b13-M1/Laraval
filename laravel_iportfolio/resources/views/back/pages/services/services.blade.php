@extends('back/layouts/app')
@section('content')
    @include('back/partials/mobile')
    @include('back/partials/header')
    <main id="main">
        <div class="back">
            <h1 class="text-center m-auto">Services Table</h1>
            {{-- <a class='btn btn-success' href='{{ route('fact.create') }}' role='button'>Create</a> --}}
            {{-- <form action="{{ route('portfolio.create') }}" method="get" class="text-center m-2">
        
                <button class="btn btn-success" type="submit">Create Portfolio</button>
            </form> --}}
            <table class='table'>
                <thead>
                    <tr>
                        <th scope='col'>#</th>
                        <th scope='col'>Delay</th>
                        <th scope='col'>Logo</th>
                        <th scope='col'>Title</th>
                        <th scope='col'>Description</th>
                        <th scope='col'><i class='bx bxs-message-square-x fs-4'></i></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services_items as $services_item)
                        <tr>
                            <th scope='row'>{{ $services_item->id }}</th>
                            <td>{{ $services_item->delay}}</td>
                            <td>{{ $services_item->logo}}</td>
                            <td>{{ $services_item->title}}</td>
                            <td>{{ $services_item->description}}</td>
                            <td>
                                <form action="{{ route("services.destroy", $services_item->id) }}" method="post">
                                    @csrf
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
    @include('back/partials/footer')
@endsection
