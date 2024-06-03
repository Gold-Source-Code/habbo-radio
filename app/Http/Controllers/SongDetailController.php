<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Song;
use App\Models\Playlist;
use Illuminate\Http\Request;

class SongDetailController extends Controller
{
    public function index(Song $song)
    {
        $allSongs = Song::all();
        return view('songdetail', ['song' => $song]);
    }

    public function create()
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
