<!DOCTYPE html>
<html>
    <head>
        <title>Habbo Radio</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/geck.css')}}">
    </head>
    <body>
        <img class="geck" src="{{asset('icons/geck.png')}}" alt="geck">
        <div class= "Title">Garden of Eden Creation Kit</div>

        <div class="center">
            <a href="/genreform">
            <input type="button" class="buttons" id="click" value="Submit Genre">
            </a>
            <a href="/songform">
            <input type="button" class="buttons" id="click" value="Submit Song">
            </a>
            <a href="/playlistform">
            <input type="button" class="buttons" id="click" value="Submit Playlist">
            </a>
            <a href="/addsongs">
            <input type="button" class="buttons" id="click" value="Add Song To Playlist">
            </a>
        </div>

        <br>

        <div class="center">
            <a href="/melon">
            <button>Songs</button>
            </a>

            <a href="/playlist">
            <button>Playlists</button>
            </a>
        </div>

        <div class="watermark">
            <img src="{{asset('icons/3.png')}}" alt="watermark">
        </div>
    </body>
</html>