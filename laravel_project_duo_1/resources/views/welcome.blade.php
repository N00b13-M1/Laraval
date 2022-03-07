@extends('layouts.app')

@section('content')
    @include('partials.banner', compact('banner'))
    @include('partials.features', compact('features'))
    @include('partials.about', compact('about_items', 'titles'))
    @include('partials.services', compact('services', 'titles'))
    @include('partials.portfolio', compact('portfolio_items', 'titles'))
    @include('partials.contact')    
@endsection





