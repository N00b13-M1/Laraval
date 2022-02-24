@extends('layouts.app')
@section('content')
    @include('partials.header')
    <div class="row text-center mx-5">
        <h1>{{ env('APP_NAME')}}</h1>
        <h2>Subtitle{{ env('APP_KEY') }}</h2>
    </div>
    @include('partials.footer')
@endsection