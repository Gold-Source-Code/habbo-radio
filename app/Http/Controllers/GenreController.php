<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Song;
use App\Models\Playlist;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allGenres = Genre::all();
        return view('genre', ['genres' => $allGenres]);
    }

    public function selectgenre(Genre $genre)
    {
        $allSongs = $genre->songs;
        $allPlaylists = Playlist::all();
        return view('melon', ['songs' => $allSongs, 'playlists' => $allPlaylists]);
    }

    public function create()
    {
        return view('genreform');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "type" => "unique:genres,type|required|min:3"
        ]);
    
        Genre::create([
            "type" => $request->type
        ]);
        return redirect('genreform');
    }

    /**
     * Display the specified resource.
     */
    public function show(Genre $genre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genre $genre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Genre $genre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genre $genre)
    {
        //
    }
}
