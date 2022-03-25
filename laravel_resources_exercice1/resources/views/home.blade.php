@extends('front/layouts.app')
@section('content')
    @include('front/partials/aside')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <div class="container-fluid py-4">
            @include('front/partials/navbar')
            <div class="row">
                @include('front/partials/money')
                @include('front/partials/users')
                @include('front/partials/clients')
                @include('front/partials/sales')
            </div>
            <div class="row mt-4">
                @include('front/partials/website_views')
                @include('front/partials/daily_sales')
                @include('front/partials/completed_tasks')
            </div>
            <div class="row mb-4">
                @include('front/partials/projects')
                @include('front/partials/orders')
            </div>
            @include('front/partials/footer')
        </div>
    </main>
    @include('front/partials/fixed_plugin')
</div>
@endsection