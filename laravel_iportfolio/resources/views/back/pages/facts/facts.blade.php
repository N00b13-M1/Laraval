@extends('back/layouts/app')
@section('content')
    @include('back/partials/mobile')
    @include('back/partials/header')
    <main id="main">
        <div class="back">
            <h1 class="text-center m-auto">Facts Table</h1>
            {{-- <a class='btn btn-success' href='{{ route('fact.create') }}' role='button'>Create</a> --}}
            <table class='table'>
                <thead>
                    <tr>
                        <th scope='col'>#</th>
                        <th scope='col'>Icon</th>
                        <th scope='col'>Number</th>
                        <th scope='col'>Strong</th>
                        <th scope='col'>P</th>
                        <th scope='col'><i class='bx bx-edit fs-4'></i></th>
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
                                <a class='btn btn-primary' href='{{ route('facts.edit', $facts_item->id) }}'
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


@extends('back.layouts.app')
@section('content')


