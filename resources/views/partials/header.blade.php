<header>

    <div class="top_header">
        <nav class="container">
            <a href="#">DC Power℠ Visa®</a>
            <a  href="#">Additional DC Sites ▼</a>
        </nav>

    </div>
    <div class="header_menu">


        <nav class="container">
            <a href="{{route('home')}}">
                <img class="logo" src="{{asset('img/dc-logo.png')}}" alt="logo">
            </a>

            <ul class="list_menu">
                <li><a href="{{ route('characters') }}" class="{{ Route::currentRouteName() === 'characters' ? 'active' : '' }}">Character</a></li>
                <li><a href="{{ route('comics') }}" class="{{ Route::currentRouteName() === 'comics' ? 'active' : '' }}">Comics</a></li>
                <li> <a href="{{ route('movies') }}" class="{{ Route::currentRouteName() === 'movies' ? 'active' : '' }}">Movies</a></li>
                <li><a href="{{ route('tv') }}" class="{{ Route::currentRouteName() === 'tv' ? 'active' : '' }}">TV</a></li>
                <li><a href="{{ route('games') }}" class="{{ Route::currentRouteName() === 'games' ? 'active' : '' }}">Games</a></li>
                <li><a href="{{ route('videos') }}" class="{{ Route::currentRouteName() === 'videos' ? 'active' : '' }}">Videos</a></li>
                <li><a href="{{ route('fans') }}" class="{{ Route::currentRouteName() === 'fans' ? 'active' : '' }}">Fans</a></li>
                <li><a href="{{ route('news') }}" class="{{ Route::currentRouteName() === 'news' ? 'active' : '' }}">News</a></li>
                <li><a href="{{ route('shop') }}" class="{{ Route::currentRouteName() === 'shop' ? 'active' : '' }}">Shop <i class="fas fa-sort-down"></i></a></li>

            </ul>


            <input type="search" name="" id="search_ip" placeholder="Search"><i class="fa fa-search"></i>
        </nav>


    </div>


</header>
@yield('jumbotron-comics')
