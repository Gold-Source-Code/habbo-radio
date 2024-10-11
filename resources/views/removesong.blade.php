@extends('layouts.gecklayout')
    @push('style')
        <link rel="stylesheet" type="text/css" href="{{asset('css/interrogation.css')}}">
    @endpush
    @section('main')
        <div class="center">
            <form action="/removesong/{{$playlist->id}}/remove" method="POST">
                @csrf


                <select name="song_id" multiple>
                    @foreach($playlist -> songs as $song)
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
    @endsection