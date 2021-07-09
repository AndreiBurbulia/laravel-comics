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
                <a href="{{ route('tv') }}" class="{{ Route::currentRouteName() === 'tv' ? 'active' : '' }}">TV</a>
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
