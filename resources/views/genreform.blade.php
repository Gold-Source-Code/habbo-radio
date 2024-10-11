@extends('layouts.gecklayout')
    @push('style')
        <link rel="stylesheet" type="text/css" href="{{asset('css/interrogation.css')}}">
    @endpush
    @section('main')
        <div class="center">
            <form action="/genreform/store" method="POST">
                @csrf
                <label class="question" for="type">Genre:</label><br>
                <input type="text" id="type" name="type" value=""><br>
                <input class="answer" type="submit" value="Send">
            </form>

            @error('type')
                <div class="errormessage">{{$message}} Fix it.</div>
            @enderror
        </div>

        <br>
    @endsection