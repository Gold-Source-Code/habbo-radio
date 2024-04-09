<!DOCTYPE html>
<html>
<head>
    <title>Habbo Radio</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/stylesheet.css')}}">
</head>
<body>
    <div class="logo">
        <img src="{{asset('icons/habbo.png')}}" alt="logo">
    </div>

    <div class="SongText">{{$name}}</div>
    <div class="ArtistText">{{$artist}}</div>

    <div class="watermark">
        <img src="{{asset('icons/3.png')}}" alt="watermark">
    </div>
</body>
</html>