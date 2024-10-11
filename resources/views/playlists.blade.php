@extends('layouts.habbolayout')
    @push('style')
        <link rel="stylesheet" type="text/css" href="{{asset('css/playlists.css')}}">
    @endpush
    @section('main')
        @foreach($playlists as $playlist)
            <a href="{{route('playlist_detail', ['playlist' => $playlist->id])}}">
                <input type="button" class="PlaylistText" id="click" value="{{$playlist->name}}">
            </a>
            @foreach($playlist -> songs as $song)
                <div class="SongText">- {{$song->name}}</div>
            @endforeach 
        @endforeach
    @endsection