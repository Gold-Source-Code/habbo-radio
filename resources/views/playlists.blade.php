<!DOCTYPE html>
<html>
    <head>
        <title>Habbo Radio</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/playlists.css')}}">
    </head>
    <body>
        <img class="logo" src="{{asset('icons/habbo.png')}}" alt="logo">

        @foreach($playlists as $playlist)
        
        <a href="{{route('playlist_detail', ['playlist' => $playlist->id])}}">
        <input type="button" class="PlaylistText" id="click" value="{{$playlist->name}}">
        </a>
            @foreach($playlist -> songs as $song)
                <div class="SongText">- {{$song->name}}</div>
            @endforeach 
        @endforeach

        <div class="center">
            <a href="/melon">
            <button>Songs</button>
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