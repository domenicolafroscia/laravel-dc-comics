@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Comics list</h1>
        <div class="text-end">
            <a class="btn btn-primary" href="{{ route('comics.create') }}">Create a comic</a>
        </div>

        @if (Session::has('message'))
            <div class="alert alert-success">
                {{ Session::get('message') }}
            </div>
        @endif

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Price</th>
                    <th scope="col">Series</th>
                    <th scope="col">Sale Date</th>
                    <th scope="col">Type</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{ $comic->id }}</th>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->price }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td>{{ $comic->type }}</td>
                        <td>
                            <a class="btn btn-success" href="{{ route('comics.show', ['comic' => $comic->id]) }}"><i
                                    class="fa-solid fa-info"></i></a>
                            <a class="btn btn-warning" href="{{ route('comics.edit', ['comic' => $comic->id]) }}"><i
                                    class="fa-solid fa-pencil"></i></a>
                            <form class="d-inline-block" action="{{ route('comics.destroy', ['comic' => $comic->id]) }}"
                                method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-delete" type="submit" data-title="{{ $comic->title }}"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

        @include('partials.delete-modal')
    </div>
@endsection
 