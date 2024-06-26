<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Song;
use App\Models\Playlist;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allPlaylists = Playlist::all();
        return view('playlists', ['playlists' => $allPlaylists]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('playlistform');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "user" => "required|string",
            "name" => "required|string",
            "description" => "required|string",
        ]);

        Playlist::create([
            "user" => $request->user,
            "name" => $request->name,
            "description" => $request->description
        ]);
    }

    /**
     * Display the specified resource.
     */

    public function add(Request $request){
        $request->validate([
            "playlist_id" => "required|integer",
            "song_id" => "required|integer",
        ]);

        $added = $request->song_id;
        $playlist = Playlist::find($request->playlist_id);
        $playlist->songs()->attach($added);
    }

    public function addsong(){
        $allSongs = Song::all();
        $allPlaylists = Playlist::all();
        return view('addsongs', ['songs' => $allSongs, 'playlist' => $allPlaylists]);
    }

    public function show(Playlist $playlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Playlist $playlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Playlist $playlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Playlist $playlist)
    {
        //
    }
}
