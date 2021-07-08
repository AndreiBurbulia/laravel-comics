<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Comics</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

    <!-- Header -->
    <header id="site_header">
        <div class="top">
            <div class="container">
                <span>DC POWER VISA</span>
                <span>
                    ADDITIONAL DC SITES
                    <i class="fas fa-caret-down"></i>
                </span>

            </div>
        </div>

        <div class="navbar">
            <div class="container">
                <div class="logo">
                    <img src="{{ asset('img/dc-logo.png') }}" alt="">
                </div>
                <nav>
                    <a href="{{ route('characters') }}"
                        class="{{ Route::currentRouteName() === 'characters' ? 'active' : '' }}">Characters</a>
                    <a href="{{ route('comics') }}"
                        class="{{ Route::currentRouteName() === 'comics' ? 'active' : '' }}">Comics</a>
                    <a href="{{ route('movies') }}"
                        class="{{ Route::currentRouteName() === 'movies' ? 'active' : '' }}">Movies</a>
                    <a href="{{ route('tv') }}"
                        class="{{ Route::currentRouteName() === 'tv' ? 'active' : '' }}">TV</a>
                    <a href="{{ route('games') }}"
                        class="{{ Route::currentRouteName() === 'games' ? 'active' : '' }}">Games</a>
                    <a href="{{ route('collectibles') }}"
                        class="{{ Route::currentRouteName() === 'collectibles' ? 'active' : '' }}">Collectibles</a>
                    <a href="{{ route('videos') }}"
                        class="{{ Route::currentRouteName() === 'videos' ? 'active' : '' }}">Videos</a>
                    <a href="{{ route('fans') }}"
                        class="{{ Route::currentRouteName() === 'fans' ? 'active' : '' }}">Fans</a>
                    <a href="{{ route('news') }}"
                        class="{{ Route::currentRouteName() === 'news' ? 'active' : '' }}">News</a>
                    <a href="{{ route('shop') }}"
                        class="{{ Route::currentRouteName() === 'shop' ? 'active' : '' }}">Shop</a>
                </nav>
                <div class="search">
                    <input type="text" name="" id="" placeholder="Search">
                    <i class="fas fa-search"></i>
                </div>

            </div>

        </div>

        <div class="bottom">
            <!--Aggiunta immagine di background con CSS -->
        </div>
    </header>
    <!-- /Header -->


    <!-- Main -->
    <main id="site_main">
        @yield('content')
        <!-- questo mi permette di creare il collegamento -->
    </main>
    <!-- /Main -->


    <!-- Footer -->
    <footer id="site_footer">
        <p>footer</p>
    </footer>
    <!-- /Footer -->
</body>

</html>
