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
                        <h2>{{ $book['title'] }}</h2>
                        <p> <strong>Series:</strong> {{ $book['series'] }}</p>
                        <p> <strong>Type:</strong> {{ $book['type'] }} </p>
                        <p> <strong>Sale Date:</strong> {{ $book['sale_date'] }} </p>
                        <p> <strong>Price:</strong> {{ $book['price'] }} </p>
                        <div class="details">
                            <h3>Description</h3>
                            <p>{{ $book['description'] }}</p>


                        </div>

                    </a>
                </div>
            @endforeach

        </div>


    </div>

@endsection
