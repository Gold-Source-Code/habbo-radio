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
            <form action="/addsongs/add" method="POST">
                @csrf
                <select name="playlist_id" multiple>
                    @foreach($playlists as $playlist)
                        <option class="options" value="{{$playlist->id}}" for="playlist_id">{{$playlist->name}}</option>
                    @endforeach
                </select><br>
                @error("playlist_id")
                <div class="errormessage">{{$message}} Fix it.</div>
                @enderror

                <select name="song_id" multiple>
                    @foreach($songs as $song)
                        <option class="options" value="{{$song->id}}" for="song_id">{{$song->name}}</option>
                    @endforeach
                </select><br>
                @error("song_id")
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

            <a href="/genre">
            <button>Genres</button>
            </a>

            <a href="/playlist">
            <button>Playlists</button>
            </a>

            <a href="/geck">
            <button>G.E.C.K.</button>
            </a>

            <a href="{{route('transmit', ['playlist' => $playlist->id])}}">  
            <button>Transmit</button>
            </a>
        </div>

        <div class="watermark">
            <img src="{{asset('icons/3.png')}}" alt="watermark">
        </div>
    </body>
</html>