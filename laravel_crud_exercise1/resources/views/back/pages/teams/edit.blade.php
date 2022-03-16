@extends('back/layouts.app')
@section('content')
    @include('back/partials.navbar')
    <div class="container edit">
        <h1 class="text-center">Teams Edit Page</h1>
        <form class="mx-5" action="{{route("teams.update", $team->id)}}" method="post">
            @csrf
            <div class="mb-3">
                    <label for="nameTeam" class="form-label">Name</label>
                    <input type="text" class="form-control" id="nameTeam" value="{{ $team->name}}" name="name">
            </div>
            <div class="mb-3">
                <label for="numberTeam" class="form-label">Number</label>
                <input type="number" class="form-control" id="numberTeam" value="{{ $team->number }}" name="number">
            </div>
            <div class="mb-3">
                <label for="coach_nameTeam" class="form-label">Coach name</label>
                <input type="text" class="form-control" id="coach_nameTeam" value="{{ $team->coach_name }}" name="coach_name">
            </div>
            <div class="mb-3">
                <label for="positionTeam" class="form-label">Position</label>
                <input type="text" class="form-control" id="positionTeam" value="{{ $team->position }}" name="position">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection