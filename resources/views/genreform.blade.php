<!DOCTYPE html>
<html>
    <head>
        <title>Habbo Radio</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/interrogation.css')}}">
    </head>
    <body>
        <img class="geck" src="{{asset('icons/geck.png')}}" alt="geck">
        <div class= "Title">Garden of Eden Creation Kit</div>

        <br>

        <div class="center">
            <form action="/genreform/store" method="POST">
                @csrf
                <label class="question" for="type">Genre:</label><br>
                <input type="text" id="type" name="type" value=""><br>
                <input class="answer" type="submit" value="Send">
            </form>

            @error('type')
            <div class="errormessage">{{$message}} Fix it.</div>
            @enderror
        </div>

        <br>

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