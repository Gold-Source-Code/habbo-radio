<!DOCTYPE html>
<html>
    <head>
        <title>Habbo Radio</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}">
    </head>
    <body>
        <img class="dorito" src="{{asset('icons/dorito-spin.gif')}}" alt="dorito">
        <div class= "Title">[[CELLS INTERLINKED]]</div>

        <br>

        <div class="center">
            <form action="SOMEWHERE" method="POST">
                @csrf
                <label class="question" for="username">User:</label><br>
                <input type="text" id="username" name="username" value=""><br>
                @error("username")
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