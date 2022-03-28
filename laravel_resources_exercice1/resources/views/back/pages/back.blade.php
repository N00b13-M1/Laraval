@extends('back/layouts.app')
@section('content')
    @include('back/partials/aside')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <div class="container-fluid py-4">
            @include('back/partials/navbar')
            <div class="row test text-center d-flex justify-content-center align-items-center">
                <h1 class="">Welcome to the back-end</h1>
            </div>
            @include('back/partials/footer')
        </div>
    </main>
</div>
@endsection

