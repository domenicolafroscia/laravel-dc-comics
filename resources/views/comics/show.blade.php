@extends('layouts.app')

@section('content')
    <div class="container">

        @if (Session::has('message'))
            <div class="alert alert-success">
                {{ Session::get('message') }}
            </div>
        @endif

        <h1>{{ $comic->title }}</h1>
        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">

        <hr>

        <ul>
            <li>
                <strong>Description: </strong>
                {{ $comic->description }}
            </li>

            <li>
                <strong>Series: </strong>
                {{ $comic->series }}
            </li>

            <li>
                <strong>Type: </strong>
                {{ $comic->type }}
            </li>
        </ul>
        
    </div>
@endsection