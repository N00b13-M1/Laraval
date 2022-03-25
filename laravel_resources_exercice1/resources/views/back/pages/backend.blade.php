@extends('front/layouts.app')
@section('content')
    @include('front/partials/aside')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <div class="container-fluid py-4">
            @include('front/partials/navbar')
            <div class="row">
                <h1>Welcome to the back-end</h1>
            </div>
            @include('front/partials/footer')
        </div>
    </main>
    @include('front/partials/fixed_plugin')
</div>
@endsection