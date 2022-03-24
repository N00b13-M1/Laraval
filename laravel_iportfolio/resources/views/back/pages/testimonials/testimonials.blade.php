@extends('back/layouts/app')
@section('content')
    @include('back/partials/mobile')
    @include('back/partials/header')
    <main id="main">
        <div class="back">
            <h1 class="text-center m-auto">Testimonials Table</h1>
            {{-- <a class='btn btn-success' href='{{ route('fact.create') }}' role='button'>Create</a> --}}
            <form action="{{ route('testimonials.create') }}" method="get" class="text-center m-2">
        
                <button class="btn btn-success" type="submit">Create Testimonials</button>
            </form>
            <table class='table'>
                <thead>
                    <tr>
                        <th scope='col'>#</th>
                        <th scope='col'>Delay</th>
                        <th scope='col'>Quote</th>
                        <th scope='col'>Picture</th>
                        <th scope='col'>H4</th>
                        <th scope='col'>H3</th>
                        <th scope='col'><i class='bx bx-edit fs-4'></i></th>
                        <th scope='col'><i class='bx bxs-message-square-x fs-4'></i></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($testimonial_items as $testimonial_item)
                        <tr>
                            <th scope='row'>{{ $testimonial_item->id }}</th>
                            <td>{{ $testimonial_item->delay}}</td>
                            <td>{{ $testimonial_item->quote}}</td>
                            <td>{{ $testimonial_item->picture}}</td>
                            <td>{{ $testimonial_item->h4}}</td>
                            <td>{{ $testimonial_item->h3}}</td>
                            <td>
                                
                                <form action="{{ route("testimonials.edit", $testimonial_item->id) }}" method="get">
                                    @csrf
                                    <button class="btn btn-primary" type="submit">Edit</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route("testimonials.destroy", $testimonial_item->id) }}" method="post">
                                    @csrf
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
    @include('back/partials/footer')
@endsection

