@extends('layouts.app')
@section('content')
    @include('partials.header')
    @include('partials.banner')
    <section class="container d-flex justify-content-center">
        <div class="row p-5 py-2">
            <div class="col-6 p-0 pe-3 pb-3">
                <div class="bg-secondary border-rounded border h-100">
                    <p class="text-white text-center my-auto fs-1 p-5">750 x 450</p>
                    <p class="text-white text-end">Powered by HTML.COM</p>
                </div>
            </div>
            <div class="col-6 p-0 ps-3 pb-3">
                <h5 class="">About Modern School</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci et fugiat ipsum qui quae obcaecati porro, mollitia dicta. Quo itaque adipisci nobis qui eum est expedita dignissimos odit nesciunt repellat.</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo modi repudiandae mollitia, quod explicabo debitis? Atque enim explicabo laudantium dolor, hic beatae ipsam, vero pariatur corporis non earum, assumenda dolorem!</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis, aspernatur! Reiciendis perspiciatis, nihil harum voluptates aspernatur dolor nisi quam dolorum quos adipisci reprehenderit quas voluptatem unde ab. Minima, perferendis eos.</p>
            </div>
        </div>
    </section>
    @include('partials.footer')
@endsection
