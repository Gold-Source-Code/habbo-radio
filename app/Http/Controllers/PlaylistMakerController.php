<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlaylistMakerController extends Controller
{
    public function index()
    {
        return view('playlistform');
    }

}
