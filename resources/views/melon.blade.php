<!DOCTYPE html>
<html>
    <head>
        <title>Habbo Radio</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/melon.css')}}">
    </head>
    <body>
        <img class="logo" src="{{asset('icons/habbo.png')}}" alt="logo">

            @foreach($songs as $song)
                <a href="{{route('song_detail', ['song' => $song->id])}}">
                <input type="button" class="SongText" id="click" value="{{$song->name}}">
                <br>
                </a>
            @endforeach

            <a href="/playlist">
            <button>Playlists</button>
            </a>

            <div class="watermark">
                <img src="{{asset('icons/3.png')}}" alt="watermark">
            </div>
    </body>
</html>