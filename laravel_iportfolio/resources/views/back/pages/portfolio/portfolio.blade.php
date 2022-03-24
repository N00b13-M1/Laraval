@extends('back/layouts/app')
@section('content')
    @include('back/partials/mobile')
    @include('back/partials/header')
    <main id="main">
        <div class="back">
            <h1 class="text-center m-auto">Portfolio Table</h1>
            {{-- <a class='btn btn-success' href='{{ route('fact.create') }}' role='button'>Create</a> --}}
            <form action="{{ route('portfolio.create') }}" method="get" class="text-center m-2">
        
                <button class="btn btn-success" type="submit">Create Portfolio</button>
            </form>
            <table class='table'>
                <thead>
                    <tr>
                        <th scope='col'>#</th>
                        <th scope='col'>Filter</th>
                        <th scope='col'>Source</th>
                        <th scope='col'>Href1</th>
                        <th scope='col'>Title1</th>
                        <th scope='col'>Href2</th>
                        <th scope='col'>Title2</th>
                        <th scope='col'><i class='bx bx-edit fs-4'></i></th>
                        <th scope='col'><i class='bx bxs-message-square-x fs-4'></i></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($portfolio_items as $portfolio_item)
                        <tr>
                            <th scope='row'>{{ $portfolio_item->id }}</th>
                            <td>{{ $portfolio_item->filter}}</td>
                            <td>{{ $portfolio_item->source}}</td>
                            <td>{{ $portfolio_item->href1}}</td>
                            <td>{{ $portfolio_item->title1}}</td>
                            <td>{{ $portfolio_item->href2 }}</td>
                            <td>{{ $portfolio_item->title2}}</td>
                            <td>
                                
                                <form action="{{ route("portfolio.edit", $portfolio_item->id) }}" method="get">
                                    @csrf
                                    <button class="btn btn-primary" type="submit">Edit</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route("portfolio.destroy", $portfolio_item->id) }}" method="post">
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

ghjhgjgjdfggdggdsfdfsgfdfdfdgdfvdfvdfvdfvdfgdfgd