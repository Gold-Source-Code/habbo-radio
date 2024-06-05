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
            <form>
                <label class="question" for="User">User:</label><br>
                <input type="text" id="user" name="user" value="Enter Text..."><br>
                <label class="question" for="Name">Name:</label><br>
                <input type="text" id="name" name="name" value="Enter Text..."><br>
                <label class="question" for="Description">Description:</label><br>
                <input type="text" id="description" name="description" value="Enter Text..."><br>
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