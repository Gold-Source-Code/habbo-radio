<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeckController extends Controller
{
    public function index()
    {
        return view('geck');
    }
    public function logintest()
    {
        return view('dorito');
    }

}
