@extends('back/layouts.app')
@section('content')
    @include('back/partials.navbar2')
    <table class="table table-dark ms-5">
        <a href="{{ route("$table.create") }}" class="ms-5 btn btn-success d-block justify-content-center w-100">Create</a>
        <thead>
            <tr>
                <th scope="col">#</th>
                @foreach ($columns as $column)
                    <th scope="col">{{ $column }}</th>
                @endforeach
                <th scope="col"><i class="fa fa-trash" aria-hidden="true"></i></th>
                <th scope="col"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $key => $data)
                <tr>
                    <th scope="row">{{ $key }}</th>

                    @foreach ($columns as $column)
                        <td>{{ $data->$column }}</td>
                    @endforeach

                    <td><a href="{{ route("$table.destroy", ['id' => $data->id]) }}" class="btn btn-danger" >delete</a></td>
                    <td><a href="/edit/{{ $table }}/{{ $data->id }}" class="btn btn-primary">edit</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
