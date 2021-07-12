@extends('layout.app')

@section('title', 'Comics')

@section('content')
    <div class="container">
        <h1>Fumetti</h1>
        <div class="card_container">
            @foreach ($fumetti_book as $index => $book)
                <div class="card">
                    <a href="{{ route('comic', ['id' => $index]) }}">
                        <img src="{{ $book['thumb'] }}" alt="">
                        <p>{{ $book['series'] }}</p>
                    </a>
                </div>
            @endforeach

        </div>


    </div>

@endsection
