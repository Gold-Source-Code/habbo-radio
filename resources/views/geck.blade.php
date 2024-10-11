@extends('layouts.gecklayout')
    @push('style')
        <link rel="stylesheet" type="text/css" href="{{asset('css/geck.css')}}">
    @endpush
    @section('main')
        <div class="center">
            <a href="/genreform">
                <input type="button" class="buttons" id="click" value="Submit Genre">
            </a>
            <a href="/songform">
                <input type="button" class="buttons" id="click" value="Submit Song">
            </a>
            <a href="/playlistform">
                <input type="button" class="buttons" id="click" value="Submit Playlist">
            </a>
            <a href="/addsongs">
                <input type="button" class="buttons" id="click" value="Add Song To Playlist">
            </a>
            <a href="/selectplaylist">
                <input type="button" class="buttons" id="click" value="Remove Song From Playlist">
            </a>
        </div>

        <br>
    @endsection