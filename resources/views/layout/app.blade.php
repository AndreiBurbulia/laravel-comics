<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
       <header id="site_header">
           <nav>
               <a href="{{route('home')}}">Home</a>
               <a href="{{route('characters')}}">Characters</a>
               <a href="{{route('comics')}}">Comics</a>
               <a href="{{route('movies')}}">Movies</a>
               <a href="{{route('tv')}}">TV</a>
               <a href="{{route('games')}}">Games</a>
               <a href="{{route('collectibles')}}">Collectibles</a>
               <a href="{{route('videos')}}">Videos</a>
               <a href="{{route('fans')}}">Fans</a>
               <a href="{{route('news')}}">News</a>
               <a href="{{route('shop')}}">Shop</a>
           </nav>
       </header>


       <main id="site_main">
        @yield('content') 
        {{-- -- questo mi permette di creare il collegamento -- --}}
       </main>


       <footer id="site_footer">
           <p>footer</p>
       </footer>
    </body>
</html>