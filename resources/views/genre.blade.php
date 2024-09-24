<!DOCTYPE html>
<html>
    <head>
        <title>Habbo Radio</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/genre.css')}}">
    </head>
    <body>
        <img class="logo" src="{{asset('icons/habbo.png')}}" alt="logo">
            @foreach($genres as $genre)
                <div class="GenreText">{{$genre->id}} - {{$genre->type}}</div>
                <br>
            @endforeach

            <div class="center">
                <a href="/melon">
                <button>Songs</button>
                </a>
            
                <a href="/playlist">
                <button>Playlists</button>
                </a>

                <a href="/geck">
                <button>G.E.C.K.</button>
                </a>
            </div>
            
            <div class="watermark">
                <img src="{{asset('icons/3.png')}}" alt="watermark">
            </div>
    </body>
</html>