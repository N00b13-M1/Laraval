@extends('back/layouts/app')
@section('content')
    @include('back/partials/mobile')
    @include('back/partials/header')
    <main id="main">
        <div class="back">
            <h1 class="text-center m-auto">Titles Table</h1>
            {{-- <a class='btn btn-success' href='{{ route('fact.create') }}' role='button'>Create</a> --}}
            {{-- <form action="{{ route('testimonials.create') }}" method="get" class="text-center m-2">
        
                <button class="btn btn-success" type="submit">Create Ttil</button>
            </form> --}}
            <table class='table'>
                <thead>
                    <tr>
                        <th scope='col'>#</th>
                        <th scope='col'>Main_title</th>
                        <th scope='col'>Sub_title</th>
                        <th scope='col'>Sub_title2</th>
                        <th scope='col'><i class='bx bx-edit fs-4'></i></th>
                </thead>
                <tbody>
                    @foreach ($titles as $title)
                        <tr>
                            <th scope='row'>{{ $title->id }}</th>
                            <td>{{ $title->main_title}}</td>
                            <td>{{ $title->sub_title}}</td>
                            <td>{{ $title->sub_title2}}</td>
                            <td>
                                
                                <form action="{{ route("titles.edit", $title->id) }}" method="get">
                                    @csrf
                                    <button class="btn btn-primary" type="submit">Edit</button>
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

