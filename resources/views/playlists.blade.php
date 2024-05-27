<!DOCTYPE html>
<html>
    <head>
        <title>Habbo Radio</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/playlists.css')}}">
    </head>
    <body>
        <img class="logo" src="{{asset('icons/habbo.png')}}" alt="logo">

        @foreach($playlists as $playlist)
        <div class="PlaylistText">{{$playlist->name}}</div>
        <!-- <a href="/playlistdetail/?id={{$playlist->id}}"><button>Check {{$playlist->name}}</button></a> -->
        <a href="{{route('playlist_detail', ['playlist' => $playlist->id])}}"><button>Check {{$playlist->name}}</button></a>
            @foreach($playlist -> songs as $song)
                <div class="SongText">- {{$song->name}}</div>
            @endforeach 
        @endforeach
        
        <a href="/melon">
        <button>Songs</button>
        </a>

        <div class="watermark">
            <img src="{{asset('icons/3.png')}}" alt="watermark">
        </div>
    </body>
</html>