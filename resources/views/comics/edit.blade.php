@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h2>Edit comic: {{ $comic->title }}</h2>

        <div class="row justify-content-center mt-5">
            <div class="col-6">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $comic->title) }}">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" rows="3" name="description">{{ old('description', $comic->description) }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="thumb" class="form-label">Image</label>
                        <input type="text" class="form-control" id="thumb" name="thumb"
                            value="{{ old('thumb', $comic->thumb) }}">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" name="price"
                            value="{{ old('price', $comic->price) }}">
                    </div>

                    <div class="mb-3">
                        <label for="series" class="form-label">Series</label>
                        <input type="text" class="form-control" id="series" name="series"
                            value="{{ old('series', $comic->series) }}">
                    </div>

                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Sale date</label>
                        <input type="date" class="form-control" id="sale_date" name="sale_date"
                            value="{{ old('sale_date', $comic->sale_date) }}">
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <select id="type" class="form-select" name="type">
                            <option @selected(old('type', $comic->type) === 'Comic book') value="comic book">Comic book</option>
                            <option @selected(old('type', $comic->type) === 'graphic novel') value="graphic novel">Graphic novel</option>
                        </select>
                    </div>

                    <button class="btn btn-warning" type="submit">Save</button>


                </form>
            </div>
        </div>

    </div>
@endsection
