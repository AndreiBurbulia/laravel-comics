@extends('layout.app')

@section('title', 'Comics Fans')

@section('content')

    <div class="show">
        <div class="container">

            <img src="{{ $comic['thumb'] }}" alt="">
            <h2>{{ $comic['title'] }}</h2>
            <p> <strong>Series:</strong> {{ $comic['series'] }}</p>
            <p> <strong>Type:</strong> {{ $comic['type'] }} </p>
            <p> <strong>Sale Date:</strong> {{ $comic['sale_date'] }} </p>
            <p> <strong>Price:</strong> {{ $comic['price'] }} </p>
            <p> <strong>Description: </strong> {{ $comic['description'] }}</p>
        </div>


    </div>



@endsection
