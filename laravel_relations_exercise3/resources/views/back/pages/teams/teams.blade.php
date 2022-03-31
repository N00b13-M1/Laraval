@extends('back/layouts.app')
@section('content')
    @include('back/partials/navbar')
    <section class="bg-warning">
        <h2 class="text-center">Teams Table</h2>
    </section>
    <section>
        <form action="{{ route('teams.create') }}" method="get" class="text-center m-2">
            <button class="btn btn-success" type="submit">Create Team</button>
        </form>
        <div class="container bg-secondary">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Team Name</th>
                        <th>City</th>
                        <th>Country</th>
                        <th>Number of Players</th>
                        <th>Number of Forwards</th>
                        <th>Number of Midfielders</th>
                        <th>Number of Defenders</th>
                        <th>Number of Substitutes</th>
                        <th>Read</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                @foreach ($teams as $team)
                    <tbody>
                        <tr>
                            <td>{{ $team->id }}</td>
                            <td>{{ $team->name }}</td>
                            <td>{{ $team->city }}</td>
                            <td>{{ $team->country }}</td>
                            <td>{{ $team->number_players }}</td>
                            <td>{{ $team->number_forwards}}</td>
                            <td>{{ $team->number_midfielders}}</td>
                            <td>{{ $team->number_defenders}}</td>
                            <td>{{ $team->number_substitutes}}</td>
                            <td>
                                <form action="{{ route('teams.read', $team->id) }}" method="get">
                                    @csrf
                                    <button class="btn btn-warning" type="submit">Read</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route('teams.edit', $team->id) }}" method="get">
                                    @csrf
                                    <button class="btn btn-primary" type="submit">Edit</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route('teams.destroy', $team->id) }}" method="post">
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
