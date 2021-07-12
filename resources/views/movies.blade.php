@extends('layout.app')

@section('title', 'Comics Movies')

@section('content')
    <h1>Movies</h1>

    @foreach ($movies as $movie)
        <h2>{{ $movie['title'] }}</h2>
        <p>{{ $movie['description'] }}</p>
    @endforeach

@endsection
