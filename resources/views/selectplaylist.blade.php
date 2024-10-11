@extends('layouts.gecklayout')
    @push('style')
        <link rel="stylesheet" type="text/css" href="{{asset('css/interrogation.css')}}">
    @endpush
    @section('main')
        <div class="center">
            <form action="/sendtors" method="POST">
                @csrf
                <select name="playlist_id" multiple>
                    @foreach($playlists as $playlist)
                        <option class="options" value="{{$playlist->id}}" for="playlist_id">{{$playlist->name}}</option>
                    @endforeach
                </select><br>
                @error("playlist_id")
                <div class="errormessage">{{$message}} Fix it.</div>
                @enderror
                <input class="answer" type="submit" value="Send">
            </form>
        </div>

        <br>
    @endsection