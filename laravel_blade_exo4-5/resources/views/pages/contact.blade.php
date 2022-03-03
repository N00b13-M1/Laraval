@extends('layouts.app')
@section('content')
    @include('partials.header')
    <div class="banner container mx-auto">
        <div class="row p-5 py-2">
            <div class="col-12 p-0">
                <h1 class="">{{$title2}} Subheading</h1>
                <p class="bg-secondary p-3"><span class="text-primary">Home<span> / {{$title2}} </p>
            </div>
        </div>
    </div>
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