@extends('back/layouts.app')
@section('content')
    @include('back/partials/navbar')
    <div class="row test text-center d-flex justify-content-center align-items-start">
        <h1>Show Player</h1>
        @if ($errors->any())
            <div class="alert alert-danger w-50 text-center">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="mx-5" action="{{ route('players.index')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" class="form-control w-50 mx-auto" id="last_name" value="{{ $player->last_name }}"
                    name="last_name" readonly>
            </div>
            <div class="mb-3">
                <label for="given_name" class="form-label">Given Name</label>
                <input type="text" class="form-control w-50 mx-auto" id="given_name" value="{{ $player->given_name }}"
                    name="given_name" readonly>
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control w-50 mx-auto" id="age" value="{{ $player->age }}"
                    name="age" readonly>
            </div>
            <div class="mb-3">
                <label for="telephone" class="form-label">Number of Players</label>
                <input type="text" class="form-control w-50 mx-auto" id="telephone" value="{{ $player->telephone }}"
                    name="telephone" readonly>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control w-50 mx-auto" id="email" value="{{ $player->email }}"
                    name="email" readonly>
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label">Gender</label>
                <input type="text" class="form-control w-50 mx-auto" id="gender" value="{{ $player->gender }}"
                    name="gender" readonly>
            </div>
            <div class="mb-3">
                <label for="country_of_origin" class="form-label">Country of origin</label>
                <input type="text" class="form-control w-50 mx-auto" id="country_of_origin" value="{{ $player->country_of_origin }}"
                    name="country_of_origin" readonly>
            </div>
            <div class="mb-3">
                <label for="position_id" class="form-label">Position</label>
                <input type="position_id" class="form-control w-50 mx-auto" id="number_substitutes" value="{{ $player->position_id }}"
                    name="position_id" readonly>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <div><img src="{{ asset($player->photo->img)}}"></div>
            </div>
            <div class="mb-3">
                <label for="team_name" class="form-label">Team Name</label>
                <input type="team_name" class="form-control w-50 mx-auto" id="team_name" value="{{ $player->team->name }}"
                    name="team_name" readonly>
            </div>
            <button type="submit" class="btn btn-primary">Return</button>
        </form>
    </div>
    @include('back/partials/footer')
@endsection
