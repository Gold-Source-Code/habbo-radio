<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Song;
use App\Models\Playlist;
use Illuminate\Http\Request;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allSongs = Song::all();
        $allPlaylists = Playlist::all();
        return view('melon', ['songs' => $allSongs, 'playlists' => $allPlaylists]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('songform');
    }
    
    public function storetemp(Request $request, Song $song)
    {   
        
        //session = list | first part = key | second part = values
        if (!$request->session()->has('transmission')){
            $request->session()->put('transmission', []);
        }
        $request->session()->push('transmission', $song->id);
        return redirect('melon');
    }
    /** 
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|string",
            "artist" => "required|string",
            "duration" => "required|integer|min:0",
            "genre_id" => "required|integer|min:1"
        ]);

        Song::create([
            "name" => $request->name,
            "artist" => $request->artist,
            "duration" => $request->duration,
            "genre_id" => $request->genre_id
        ]);
        return view('songform');
    }

    /**
     * Display the specified resource.
     */
    public function show(Song $song)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Song $song)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Song $song)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Song $song)
    {
        //
    }
}
