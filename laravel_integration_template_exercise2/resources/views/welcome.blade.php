@extends('layouts.app')
@section('content')
    <!-- Navigation-->
    @include('partials.nav')
    <!-- Masthead-->
    @include('partials.masthead')
    <!-- Services Section-->
    @include('partials.services')
    <!-- Portfolio Section --> 
    @include('partials.portfolio')
    <!-- About Section-->
    @include('partials.about')
    <!-- Team Section-->
    @include('partials.team')
    <!-- Clients Section-->
    @include('partials.clients')
    <!-- Contact Section-->
    @include('partials.contact')
    <!-- Footer-->
    @include('partials.footer')
    <!-- Portfolio Modals-->
    @include('partials.modals')
@endsection

