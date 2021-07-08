<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

       
    </head>
    <body>
       <header>
           <nav>
               <a href="{{route('home')}}">Home</a>
               <a href="{{route('characters')}}">Characters</a>
               <a href="">Comics</a>
               <a href="">Movies</a>
               <a href="">TV</a>
               <a href="">Games</a>
               <a href="">Collectibles</a>
               <a href="">Videos</a>
               <a href="">Fans</a>
               <a href="">News</a>
               <a href="">Shop</a>
           </nav>
       </header>


       <main id="site_main">
        @yield('content') 
        {{-- -- questo mi permette di creare il collegamento -- --}}
       </main>
    </body>
</html>