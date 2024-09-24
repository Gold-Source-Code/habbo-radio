<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Song;
use App\Models\Playlist;
use Illuminate\Http\Request;
use Auth;

class PlaylistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allPlaylists = Auth::user()->playlists;
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
            "name" => "required|string",
            "description" => "required|string",
        ]);

        Playlist::create([
            "user_id" => Auth::user()->id,
            "name" => $request->name,
            "description" => $request->description
        ]);
        return view('playlistform');
    }

    /**
     * Display the specified resource.
     */

    public function add(Request $request){
        $request->validate([
            "playlist_id" => "required|integer",
            "song_id" => "required|integer",
        ]);
        $allSongs = Song::all();
        $allPlaylists = Auth::user()->playlists;

        $added = $request->song_id;
        $playlist = Playlist::find($request->playlist_id);
        $playlist->songs()->attach($added);
        return view('addsongs', ['songs' => $allSongs, 'playlists' => $allPlaylists]);
    }

    public function addsong(){
        $allSongs = Song::all();
        $allPlaylists = Auth::user()->playlists;
        return view('addsongs', ['songs' => $allSongs, 'playlists' => $allPlaylists]);
    }

    public function transmit(Request $request, Playlist $playlist)
    {
        $transmission = $request->session()->only(['transmission']);

        foreach ($transmission as $songvalue){
            $playlist->songs()->attach($songvalue);
        }
        return view('geck');
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
