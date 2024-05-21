<!DOCTYPE html>
<html>
    <head>
        <title>Habbo Radio</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/stylesheet.css')}}">
    </head>
    <body>
        <img class="logo" src="{{asset('icons/habbo.png')}}" alt="logo">

            @foreach($songs as $song)
                <div class="SongText">{{$song->name}}</div>

                <?php
                $total_runtime = $song->duration;
                
                $min = intval($total_runtime / 60);
                $sec = sprintf("%02d", $total_runtime % 60);

                $dur = "$min:$sec";
                ?>

                <div class="ArtistText">{{$song->artist}} - {{$dur}} - {{$song->genre->type}}</div>
            @endforeach

            @foreach($playlists as $playlist)
            <div class="PlaylistText">{{$playlist->name}}</div>
                @foreach($playlist -> songs as $song2)
                    <div class="SonglistText">{{$song2->name}}</div>
                @endforeach 
            @endforeach

            <div class="watermark">
                <img src="{{asset('icons/3.png')}}" alt="watermark">
            </div>
    </body>
</html>