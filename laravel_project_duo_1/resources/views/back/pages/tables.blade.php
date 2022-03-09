@extends('back/layouts.app')
@section('content')
    @include('back/partials.navbar2')

    <table class="table table-dark ms-5">
        <thead>
            <tr>
                <th scope="col">#</th>
                @foreach ($columns as $column)
                    <th scope="col">{{ $column }}</th>
                @endforeach
                <th scope="col"><i class="fa fa-trash" aria-hidden="true"></i></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $key => $data)
                <tr>
                    <th scope="row">{{ $key }}</th>

                    @foreach ($columns as $column)
                        <td>{{ $data->$column }}</td>
                    @endforeach

                    <th>
                        <form action="{{ route("$table.destroy", $data->id) }}" method="post">
                            @csrf
                                <button class="btn btn-danger type=" type="submit">Delete</button>
                        </form>
                    </th>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
