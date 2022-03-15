@extends('back/layouts.app')
@section('content')
        @include('back/partials/navbar')
        <section class="bg-warning">
                <h1 class="text-center">Teams Table</h1>
        </section>
        <section>
                <div class="container bg-secondary">
                <table class="table table-condensed">
                        <thead>
                        <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Number</th>
                                <th>Coach Name</th>
                                <th>Position</th>
                                <th>Delete</th>
                                <th>Edit</th>
                        </tr>
                        </thead>
                        @foreach ($teams as $item)
                        <tbody>
                                <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->number }}</td>
                                <td>{{ $item->coach_name }}</td>
                                <td>{{ $item->position }}</td>
                                <td>
                                        <form action="{{ route("teams.destroy", $item->id) }}" method="post">
                                                @csrf
                                                <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                </td>
                                </tr>
                        </tbody>
                        @endforeach
                </table>
                </div>
        <section>
@endsection
