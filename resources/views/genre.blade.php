@extends('layouts.habbolayout')
    @push('style')
        <link rel="stylesheet" type="text/css" href="{{asset('css/genre.css')}}">
    @endpush
    @section('main')
        @foreach($genres as $genre)
            <a href="{{route('selectgenre', ['genre' => $genre->id])}}">
                    <input type="button" class="GenreText" id="click" value="{{$genre->type}}">
                </a>
                <br>
        @endforeach
    @endsection