@extends('back/layouts.app')
@section('content')
    @include('back/partials/navbar')
    <section class="bg-warning">
        <h2 class="text-center">Photos Table</h2>
    </section>
    <section>
        <form action="{{ route('photos.create') }}" method="get" class="text-center m-2">
            <button class="btn btn-success" type="submit">Add Photo</button>
        </form>
        <div class="container bg-secondary">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Position</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                @foreach ($photos as $photo)
                    <tbody>
                        <tr>
                            <td>{{ $photo->id }}</td>
                            <td><img src="{{ asset("$photo->img") }}" width="100" height="100"alt="" srcset="">
                                </td>
                            <td>
                                <form action="{{ route('photos.edit', $photo->id) }}" method="get">
                                    @csrf
                                    <button class="btn btn-primary" type="submit">Edit</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route('photos.destroy', $photo->id) }}" method="post">
                                    @csrf
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
        {{-- Alert Testimonial Added --}}
        @if (session()->has('success'))
            <div class="alert alert-success w-25 mx-auto m-3">
                <p>{{ session()->get('success') }}</p>
            </div>
        @endif
        {{-- Alert Testimonial Updated --}}
        @if (session()->has('update'))
            <div class="alert alert-warning w-25 mx-auto m-3">
                <p>{{ session()->get('update') }}</p>
            </div>
        @endif
        {{-- Alert Testimonial Deleted --}}
        @if (session()->has('delete'))
            <div class="alert alert-danger w-25 mx-auto m-3">
                <p>{{ session()->get('delete') }}</p>
            </div>
        @endif
    <section>
    @include('back/partials/footer')
@endsection

