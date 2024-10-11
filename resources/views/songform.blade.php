@extends('layouts.gecklayout')
    @push('style')
        <link rel="stylesheet" type="text/css" href="{{asset('css/interrogation.css')}}">
    @endpush
    @section('main')
        <div class="center">
            <form action="/songform/store" method="POST">
                @csrf
                <label class="question" for="name">Name:</label><br>
                <input type="text" id="name" name="name" value=""><br>
                @error("name")
                <div class="errormessage">{{$message}} Fix it.</div>
                @enderror

                <label class="question" for="artist">Artist:</label><br>
                <input type="text" id="artist" name="artist" value=""><br>
                @error("artist")
                <div class="errormessage">{{$message}} Fix it.</div>
                @enderror

                <label class="question" for="duration">Duration:</label><br>
                <input type="text" id="duration" name="duration" value=""><br>
                @error("duration")
                <div class="errormessage">{{$message}} Fix it.</div>
                @enderror

                <label class="question" for="genre_id">Genre:</label><br>
                <input type="text" id="genre_id" name="genre_id" value=""><br>
                @error("genre_id")
                <div class="errormessage">{{$message}} Fix it.</div>
                @enderror

                <input class="answer" type="submit" value="Send">
            </form>
        </div>

        <br>
    @endsection