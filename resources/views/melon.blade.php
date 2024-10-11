@extends('layouts.habbolayout')
    @push('style')
        <link rel="stylesheet" type="text/css" href="{{asset('css/melon.css')}}">
    @endpush
    @section('main')
        @foreach($songs as $song)
                <a href="{{route('song_detail', ['song' => $song->id])}}">
                    <input type="button" class="SongText" id="click" value="{{$song->name}}">
                </a>
                <a href="{{route('storetemp', ['song' => $song->id])}}">
                    <input type="button" class="SongText" id="click" value=" + ">
                </a>
            <br>
        @endforeach
    @endsection