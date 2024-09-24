<!DOCTYPE html>
<html>
    <head>
        <title>Habbo Radio</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/songdetail.css')}}">
    </head>
    <body>
        <img class="logo" src="{{asset('icons/habbo.png')}}" alt="logo">

        <div class="SongName">{{$song->name}}</div>

        <?php
                $total_runtime = $song->duration;
                
                $min = intval($total_runtime / 60);
                $sec = sprintf("%02d", $total_runtime % 60);

                $dur = "$min:$sec";
                ?>

                <div class="SongText">{{$song->artist}} - {{$dur}} - {{$song->genre->type}}</div>

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
        </div>
            
        <div class="watermark">
            <img src="{{asset('icons/3.png')}}" alt="watermark">
        </div>
    </body>
</html>