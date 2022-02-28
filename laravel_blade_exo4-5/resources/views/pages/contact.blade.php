@extends('layouts.app')
@section('content')
    @include('partials.header')
    @include('partials.banner')
    <section class="container m-5">
        <form class="w-25 mx-auto">
            <div class="mb-3">
                <label for="exampleInputNom" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleInputName" aria-describedby="emailHelp">
    
            </div>
            <div class="mb-3">
                <label for="exampleInputPrenom" class="form-label">Prenom</label>
                <input type="text" class="form-control" id="exampleInputPrenom">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
    @include('partials.footer')
@endsection