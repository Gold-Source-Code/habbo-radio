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

    public function updategenre(){
        $genre = Genre::all();
        return view('updategenre', ['genres' => $genre]);
    }

    public function update(Request $request)
    {
        $request->validate([
            "genre_id" => "required|integer",
            "name" => "required|string"
        ]);
        Genre::find($request->genre_id)->update(['type' => $request->name]);
        return view('geck');
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
}