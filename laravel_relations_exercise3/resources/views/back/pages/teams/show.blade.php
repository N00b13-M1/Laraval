@extends('back/layouts.app')
@section('content')
    @include('back/partials/navbar')
    <div class="row test text-center d-flex justify-content-center align-items-start">
        <h1>Edit Teams</h1>
        <form class="mx-5" action="{{ route('teams.index')}}" method="get">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Team Name</label>
                <input type="text" class="form-control w-50 mx-auto" id="name" value="{{ $team->name }}"
                    name="name" readonly>
            </div>
            <div class="mb-3">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control w-50 mx-auto" id="city" value="{{ $team->city }}"
                    name="city" readonly>
            </div>
            <div class="mb-3">
                <label for="country" class="form-label">Country</label>
                <input type="text" class="form-control w-50 mx-auto" id="country" value="{{ $team->country }}"
                    name="Country" readonly>
            </div>
            <div class="mb-3">
                <label for="continent" class="form-label">Continent</label>
                <input type="text" class="form-control w-50 mx-auto" id="continent" value="{{ $team->continent }}"
                    name="Continent" readonly>
            </div>
            <div class="mb-3">
                <label for="number_players" class="form-label">Number of Players</label>
                <input type="number" class="form-control w-50 mx-auto" id="number_players" value="{{ $team->number_players }}"
                    name="number_players" readonly>
            </div>
            <div class="mb-3">
                <label for="number_forwards" class="form-label">Number of Forwards</label>
                <input type="number" class="form-control w-50 mx-auto" id="number_forwards" value="{{ $team->number_forwards }}"
                    name="number_forwards" readonly>
            </div>
            <div class="mb-3">
                <label for="number_midfielders" class="form-label">Number of Forwards</label>
                <input type="number" class="form-control w-50 mx-auto" id="number_midfielders" value="{{ $team->number_midfielders }}"
                    name="number_midfielders" readonly>
            </div>
            <div class="mb-3">
                <label for="number_defenders" class="form-label">Number of Defenders</label>
                <input type="number" class="form-control w-50 mx-auto" id="number_defenders" value="{{ $team->number_defenders }}"
                    name="number_defenders" readonly>
            </div>
            <div class="mb-3">
                <label for="number_substitutes" class="form-label">Number of Substitutes</label>
                <input type="number" class="form-control w-50 mx-auto" id="number_substitutes" value="{{ $team->number_substitutes }}"
                    name="number_substitutes" readonly>
            </div>
            <button type="submit" class="btn btn-primary">Return</button>
        </form>
    </div>
    @include('back/partials/footer')
@endsection
