<!DOCTYPE html>
<html>
    <head>
        <title>Habbo Radio</title>
        @stack('style')
    <head\>
    <body>
        <img class="logo" src="{{asset('icons/habbo.png')}}" alt="logo">

        @yield('main')

        <div class="center">
            <a href="/melon">
                <button>Songs</button>
            </a>

            <a href="/genre">
                <button>Genres</button>
            </a>

            <a href="/playlist">
                <button>Playlists</button>
            </a>

            <a href="/geck">
                <button>G.E.C.K.</button>
            </a>

            <a href="/tempplaylistdetail">
                <button>Package</button>
            </a>
        </div>
            
        <div class="watermark">
            <img src="{{asset('icons/cooler.gif')}}" alt="watermark">
        </div>
    <body\>
<html\>