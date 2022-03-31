@extends('back/layouts.app')
@section('content')
    @include('back/partials/navbar')
    <section class="bg-warning">
        <h2 class="text-center">Positions Table</h2>
    </section>
    <section>
        <form action="{{ route('positions.create') }}" method="get" class="text-center m-2">
            <button class="btn btn-success" type="submit">Add Position</button>
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
                @foreach ($positions as $position)
                    <tbody>
                        <tr>
                            <td>{{ $position->id }}</td>
                            <td>{{ $position->position }}</td>
                            <td>
                                <form action="{{ route('positions.edit', $position->id) }}" method="get">
                                    @csrf
                                    <button class="btn btn-primary" type="submit">Edit</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route('positions.destroy', $position->id) }}" method="post">
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

