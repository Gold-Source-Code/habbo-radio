<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SongMakerController extends Controller
{
    public function index()
    {
        return view('songform');
    }

}
