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
        return redirect()->back();
    }

    public function addsong(){
        $allSongs = Song::all();
        $allPlaylists = Auth::user()->playlists;
        if ($allPlaylists->isEmpty()){
            
            return redirect()->route('playlistform');
        }

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

    public function showtempplaylist(Request $request)
    {
        if (!$request->session()->has('transmission')){
            $request->session()->put('transmission', []);
        }
        $transmission = $request->session()->only(['transmission']);
        $TempSongs = Song::find($transmission['transmission']);
        
        return view('tempplaylistdetail', ['songs' => $TempSongs]);
    }

    public function removesong(Playlist $playlist){
        return view('removesong', ['playlist' => $playlist]);
    }

    public function remove(Request $request, Playlist $playlist){
        $request->validate([
            "song_id" => "required|integer",
        ]);
        $selected = $request->song_id;
        $playlist->songs()->detach($selected);
        return redirect()->back();
    }

    public function selectplaylist(Request $request, Playlist $playlist){
        $allPlaylists = Auth::user()->playlists;
        
        return view('selectplaylist', ['playlists' => $allPlaylists]);
    }   

    public function sendtors(Request $request){
        $selected = $request->playlist_id;
        return redirect()->route('removesong', ['playlist' => $selected]);
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
