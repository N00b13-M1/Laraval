@extends('back/layouts.app')
@section('content')
    @include('back/partials/navbar')
    <section class="bg-warning">
        <h2 class="text-center">Players Table</h2>
    </section>
    <section>
        <form action="{{ route('players.create') }}" method="get" class="text-center m-2">
            <button class="btn btn-success" type="submit">Create Role</button>
        </form>
        <div class="container bg-secondary">
            <table class="table table-condensed">
                <thead>
                        <th>ID</th>
                        <th>Last Name</th>
                        <th>Given Name</th>
                        <th>Age</th>
                        <th>Telephone</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Country</th>
                        <th>Position</th>
                        <th>Photo</th>
                        <th>Read</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                @foreach ($players as $player)
                    <tbody>
                        <tr>
                            <td>{{ $player->id }}</td>
                            <td>{{ $player->last_name }}</td>
                            <td>{{ $player->given_name }}</td>
                            <td>{{ $player->age }}</td>
                            <td>{{ $player->telephone }}</td>
                            <td>{{ $player->email }}</td>
                            <td>{{ $player->gender }}</td>
                            <td>{{ $player->country_of_origin }}</td>
                            <td>{{ $player->position->position }}</td>
                            <td><img src="{{ asset($player->photo->img)}}"</td>
                            <td>
                                <form action="{{ route('players.read', $player->id) }}" method="get">
                                    @csrf
                                    <button class="btn btn-warning" type="submit">Read</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route('players.edit', $player->id) }}" method="get">
                                    @csrf
                                    <button class="btn btn-primary" type="submit">Edit</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route('players.destroy', $player->id) }}" method="post">
                                    @csrf
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
        {{-- Alert Testimonial Added --}}
        @if (session()->has('success'))
            <div class="alert alert-success w-25 mx-auto m-3">
                <p>{{ session()->get('success') }}</p>
            </div>
        @endif
        {{-- Alert Testimonial Updated --}}
        @if (session()->has('update'))
            <div class="alert alert-warning w-25 mx-auto m-3">
                <p>{{ session()->get('update') }}</p>
            </div>
        @endif
        {{-- Alert Testimonial Deleted --}}
        @if (session()->has('delete'))
            <div class="alert alert-danger w-25 mx-auto m-3">
                <p>{{ session()->get('delete') }}</p>
            </div>
        @endif
    <section>
    @include('back/partials/footer')
@endsection


