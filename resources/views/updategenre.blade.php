@extends('layouts.gecklayout')
    @push('style')
        <link rel="stylesheet" type="text/css" href="{{asset('css/interrogation.css')}}">
    @endpush
    @section('main')
        <div class="center">
            <form action="/updategenre/update" method="POST">
                @csrf
                <select name="genre_id" multiple>
                    @foreach($genres as $genre)
                        <option class="options" value="{{$genre->id}}" for="genre_id">{{$genre->type}}</option>
                    @endforeach
                </select><br>
                @error("genre_id")
                <div class="errormessage">{{$message}} Fix it.</div>
                @enderror

                <label class="question" for="name">Name:</label><br>
                <input type="text" id="name" name="name" value=""><br>
                @error("name")
                <div class="errormessage">{{$message}} Fix it.</div>
                @enderror

                <input class="answer" type="submit" value="Send">
            </form>
        </div>

        <br>
    @endsection