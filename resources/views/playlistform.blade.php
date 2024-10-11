@extends('layouts.gecklayout')
    @push('style')
        <link rel="stylesheet" type="text/css" href="{{asset('css/interrogation.css')}}">
    @endpush
    @section('main')
        <div class="center">
            <form action="/playlistform/store" method="POST">
                @csrf
                    <label class="question" for="user">Name:</label><br>
                    <input type="text" id="name" name="name" value=""><br>
                @error("name")
                    <div class="errormessage">{{$message}} Fix it.</div>
                @enderror

                    <label class="question" for="description">Description:</label><br>
                    <input type="text" id="description" name="description" value=""><br>
                @error("description")
                    <div class="errormessage">{{$message}} Fix it.</div>
                @enderror

                <input class="answer" type="submit" value="Send">
            </form>
        </div>

        <br>
    @endsection