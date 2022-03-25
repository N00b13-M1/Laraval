@extends('back/layouts/app')
@section('content')
    @include('back/partials/mobile')
    @include('back/partials/header')
    <main id="main">
        <div class="back">
            <h1 class="text-center m-auto">Facts Table</h1>
            {{-- <a class='btn btn-success' href='{{ route('fact.create') }}' role='button'>Create</a> --}}
            <form action="{{ route('facts.create') }}" method="get" class="text-center m-2">
                {{-- Alert Testimonial Added --}}
                @if (session()->has('success'))
                <div class="alert alert-success w-75 mx-auto m-3">
                    <p>{{ session()->get('success') }}</p>
                </div>
                @endif
                {{-- Alert Testimonial Updated --}}
                @if (session()->has('update'))
                <div class="alert alert-warning w-25 m-3">
                    <p>{{ session()->get('update') }}</p>
                </div>
                @endif
                {{-- Alert Testimonial Deleted --}}
                @if (session()->has('delete'))
                <div class="alert alert-danger w-75 mx-auto m-3">
                    <p>{{ session()->get('delete') }}</p>
                </div>
                @endif
        
                <button class="btn btn-success" type="submit">Create Fact</button>
            </form>
            <table class='table'>
                <thead>
                    <tr>
                        <th scope='col'>#</th>
                        <th scope='col'>Icon</th>
                        <th scope='col'>Number</th>
                        <th scope='col'>Strong</th>
                        <th scope='col'>P</th>
                        <th scope='col'><i class='bx bx-edit fs-4'></i></th>
                        <th scope='col'><i class='bx bxs-message-square-x fs-4'></i></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($facts_items as $facts_item)
                        <tr>
                            <th scope='row'>{{ $facts_item->id }}</th>
                            <td>{{ $facts_item->icon}}</td>
                            <td>{{ $facts_item->number}}</td>
                            <td>{{ $facts_item->strong }}</td>
                            <td>{{ $facts_item->p }}</td>
                            <td>
                                
                                <form action="{{ route("facts.edit", $facts_item->id) }}" method="get">
                                    @csrf
                                    <button class="btn btn-primary" type="submit">Edit</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route("facts.destroy", $facts_item->id) }}" method="post">
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

