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
            <form action="/songform/store" method="POST">
                @csrf
                <label class="question" for="name">Name:</label><br>
                <input type="text" id="name" name="name" value=""><br>
                @error("name")
                <div class="errormessage">{{$message}} Fix it.</div>
                @enderror

                <label class="question" for="artist">Artist:</label><br>
                <input type="text" id="artist" name="artist" value=""><br>
                @error("artist")
                <div class="errormessage">{{$message}} Fix it.</div>
                @enderror

                <label class="question" for="duration">Duration:</label><br>
                <input type="text" id="duration" name="duration" value=""><br>
                @error("duration")
                <div class="errormessage">{{$message}} Fix it.</div>
                @enderror

                <label class="question" for="genre_id">Genre:</label><br>
                <input type="text" id="genre_id" name="genre_id" value=""><br>
                @error("genre_id")
                <div class="errormessage">{{$message}} Fix it.</div>
                @enderror

                <input class="answer" type="submit" value="Send">
            </form>
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