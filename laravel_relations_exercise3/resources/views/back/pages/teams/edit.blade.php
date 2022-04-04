@extends('back/layouts.app')
@section('content')
    @include('back/partials/navbar')
    <div class="row test text-center d-flex justify-content-center align-items-start">
        <h1>Edit Teams</h1>
        @if ($errors->any())
            <div class="alert alert-danger w-50 text-center">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="mx-5" action="{{ route('teams.update', $team->id) }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Team Name</label>
                <input type="text" class="form-control w-50 mx-auto" id="name" value="{{ $team->name }}"
                    name="name">
            </div>
            <div class="mb-3">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control w-50 mx-auto" id="city" value="{{ $team->city }}"
                    name="city">
            </div>
            <div class="mb-3">
                <label for="country" class="form-label">Country</label>
                <input type="text" class="form-control w-50 mx-auto" id="country" value="{{ $team->country }}"
                    name="country">
            </div>
            <div class="mb-3">
                <label for="continent" class="form-label">Continent</label>
                <input type="text" class="form-control w-50 mx-auto" id="continent" value="{{ $team->continent }}"
                    name="continent">
            </div>
            <div class="mb-3">
                <label for="number_players" class="form-label">Number of Players</label>
                <input type="number" class="form-control w-50 mx-auto" id="number_players" value="{{ $team->number_players }}"
                    name="number_players">
            </div>
            <div class="mb-3">
                <label for="number_forwards" class="form-label">Number of Forwards</label>
                <input type="number" class="form-control w-50 mx-auto" id="number_forwards" value="{{ $team->number_forwards }}"
                    name="number_forwards">
            </div>
            <div class="mb-3">
                <label for="number_midfielders" class="form-label">Number of Forwards</label>
                <input type="number" class="form-control w-50 mx-auto" id="number_midfielders" value="{{ $team->number_midfielders }}"
                    name="number_midfielders">
            </div>
            <div class="mb-3">
                <label for="number_defenders" class="form-label">Number of Defenders</label>
                <input type="number" class="form-control w-50 mx-auto" id="number_defenders" value="{{ $team->number_defenders }}"
                    name="number_defenders">
            </div>
            <div class="mb-3">
                <label for="number_substitutes" class="form-label">Number of Substitutes</label>
                <input type="number" class="form-control w-50 mx-auto" id="number_substitutes" value="{{ $team->number_substitutes }}"
                    name="number_substitutes">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    @include('back/partials/footer')
@endsection
