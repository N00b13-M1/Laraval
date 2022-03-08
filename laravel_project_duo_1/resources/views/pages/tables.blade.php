@extends('layouts.app')
@section('content')
    @include('partials.navbar2')

    <table class="table table-dark ms-5">
        <thead>
            <tr>
                <th scope="col">#</th>

                @foreach ($columns as $column)
                    <th scope="col">{{ $column }}</th>
                @endforeach

            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $key => $data)
                <tr>
                    <th scope="row">{{ $key }}</th>

                    @foreach ($columns as $column)
                        <td>{{ $data->$column }}</td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
