@extends('layouts.habbolayout')
    @push('style')
        <link rel="stylesheet" type="text/css" href="{{asset('css/songdetail.css')}}">
    @endpush
    @section('main')
        <div class="SongName">{{$song->name}}</div>

        <?php
                $total_runtime = $song->duration;
                
                $min = intval($total_runtime / 60);
                $sec = sprintf("%02d", $total_runtime % 60);

                $dur = "$min:$sec";
                ?>

        <div class="SongText">{{$song->artist}} - {{$dur}} - {{$song->genre->type}}</div>
    @endsection