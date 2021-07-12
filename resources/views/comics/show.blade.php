@extends('layout.app')

@section('title', 'Comics Show')

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


            <div class="artist">
                <h2>Artist</h2>
                @forelse($comic['artists'] as $artist)
                    <span>{{ $artist }}</span>

                @empty
                    <span>No artist</span>
                @endforelse

                {{-- E un ciclo come il foreach pero va a fare una verifica, quindi se l'array e vuoto mostra il @empty mentre se ce qualcosa nell'array mostar quello che l'array contiene --}}

            </div>

            <div class="writers">
                <h2>Writers</h2>
                @foreach ($comic['writers'] as $writer)
                    <span>{{ $writer }}</span>
                @endforeach
            </div>

        </div>


    </div>



@endsection
