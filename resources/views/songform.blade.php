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
                <label class="question" for="name">Name:</label><br>
                <input type="text" id="name" name="name" value="Enter Text..."><br>
                <label class="question" for="name">Artist:</label><br>
                <input type="text" id="artist" name="artist" value="Enter Text..."><br>
                <label class="question" for="name">Duration:</label><br>
                <input type="text" id="duration" name="duration" value="Enter Text..."><br>
                <label class="question" for="name">Genre:</label><br>
                <input type="text" id="genre_id" name="genre_id" value="Enter Text..."><br>
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