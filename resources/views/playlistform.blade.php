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
            <form action="/playlistform/store" method="POST">
                @csrf
                <label class="question" for="user">User:</label><br>
                <input type="text" id="user" name="user" value=""><br>
                @error("user")
                <div class="errormessage">{{$message}} Fix it.</div>
                @enderror

                <label class="question" for="user">Name:</label><br>
                <input type="text" id="name" name="name" value=""><br>
                @error("name")
                <div class="errormessage">{{$message}} Fix it.</div>
                @enderror

                <label class="question" for="description">Description:</label><br>
                <input type="text" id="description" name="description" value=""><br>
                @error("description")
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