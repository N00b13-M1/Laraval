@extends('back/layouts.app')
@section('content')
    @include('back/partials/navbar')
    <div class="row test text-center d-flex justify-content-center align-items-start">
        <h1>Create Player</h1>
        @if ($errors->any())
            <div class="alert alert-danger w-50 text-center">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="mx-5" action="{{ route('players.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" class="form-control w-50 mx-auto" id="last_name"
                    name="last_name">
            </div>
            <div class="mb-3">
                <label for="given_name" class="form-label">Given Name</label>
                <input type="text" class="form-control w-50 mx-auto" id="given_name"
                    name="given_name">
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control w-50 mx-auto" id="age"
                    name="age">
            </div>
            <div class="mb-3">
                <label for="telephone" class="form-label">Telephone</label>
                <input type="text" class="form-control w-50 mx-auto" id="telephone" 
                    name="telephone">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control w-50 mx-auto" id="email"
                    name="email">
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label">Gender</label>
                <input type="text" class="form-control w-50 mx-auto" id="gender" 
                    name="gender">
            </div>
            <div class="mb-3">
                <label for="country_of_origin" class="form-label">Country of origin</label>
                <input type="text" class="form-control w-50 mx-auto" id="country_of_origin"
                    name="country_of_origin">
            </div>
            {{-- <div class="mb-3">
                <label for="position_id" class="form-label">Position</label>
                <input type="position_id" class="form-control w-50 mx-auto" id="number_substitutes" 
                    name="position_id">
            </div> --}}
            <div>
                <select name="position_id" class="form-control w-50 mx-auto">
                    <option>Position</option>
                    <!--selected by default-->
                    @foreach ($positions as $position)
                        <option value="{{ $position->id }}">
                            {{ $position->position }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="img" class="form-label">Image</label>
                <input type="file" class="form-control w-50 mx-auto" id="img"
                    name="img">
            </div>
            <div class="mb-3">
                <label for="team_name" class="form-label">Team name</label>
                <input type="text" class="form-control w-50 mx-auto" id="team_name" 
                    name="team_name">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    @include('back/partials/footer')
@endsection
