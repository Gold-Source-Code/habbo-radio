@extends('layouts.habbolayout')
    @push('style')
        <link rel="stylesheet" type="text/css" href="{{asset('css/playlistdetail.css')}}">
    @endpush
    @section('main')
        <?php
            $playlist_dur = 0;
            foreach ($songs as $song){
                $playlist_dur = $playlist_dur + $song->duration;
                }
            
            $total_runtime = $playlist_dur;
                
            $min = intval($total_runtime / 60);
            $sec = sprintf("%02d", $total_runtime % 60);

            $dur = "$min:$sec";
            ?>

        <div class="PlaylistName">Temporary Playlist - {{$dur}}</div>
        @foreach($songs as $song)
                <a href="{{route('song_detail', ['song' => $song->id])}}">
                    <input type="button" class="SongText" id="click" value="{{$song->name}}">
                </a>
                <a href="{{route('removetemp', ['song' => $song->id])}}">
                    <input type="button" class="SongText" id="click" value=" - ">
                </a>
                <br>
        @endforeach 
    @endsection