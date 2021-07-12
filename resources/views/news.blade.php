@extends('layout.app')

@section('title', 'Comics News')

@section('content')
    <h1>News</h1>

    @foreach ($posts as $post)
        <h2>{{ $post['title'] }}</h2>
    @endforeach

@endsection
