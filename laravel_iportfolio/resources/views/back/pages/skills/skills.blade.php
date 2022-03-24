@extends('back/layouts/app')
@section('content')
    @include('back/partials/mobile')
    @include('back/partials/header')
    <main id="main">
        <div class="back">
            <h1 class="text-center m-auto">Skills Table</h1>
            {{-- <a class='btn btn-success' href='{{ route('fact.create') }}' role='button'>Create</a> --}}
            <form action="{{ route('skills.create') }}" method="get" class="text-center m-2">
        
                <button class="btn btn-success" type="submit">Create Skill</button>
            </form>
            <table class='table'>
                <thead>
                    <tr>
                        <th scope='col'>#</th>
                        <th scope='col'>Language</th>
                        <th scope='col'>Percentage</th>
                        <th scope='col'>Value</th>
                        <th scope='col'><i class='bx bx-edit fs-4'></i></th>
                        <th scope='col'><i class='bx bxs-message-square-x fs-4'></i></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($skills_items as $skills_item)
                        <tr>
                            <th scope='row'>{{ $skills_item->id }}</th>
                            <td>{{ $skills_item->language}}</td>
                            <td>{{ $skills_item->percentage}}</td>
                            <td>{{ $skills_item->value}}</td>
                            <td>
                                
                                <form action="{{ route("skills.edit", $skills_item->id) }}" method="get">
                                    @csrf
                                    <button class="btn btn-primary" type="submit">Edit</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route("skills.destroy", $skills_item->id) }}" method="post">
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


{{-- 
    