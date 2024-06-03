<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\PlaylistDetailController;
use App\Http\Controllers\SongDetailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/melon', [SongController::class, "index"]);

Route::get('/playlist', [PlaylistController::class, "index"]);

Route::get('/playlistdetail/{playlist}', [PlaylistDetailController::class, "index"])->name("playlist_detail");

Route::get('/songdetail/{song}', [SongDetailController::class, "index"])->name("song_detail");

// Route insert a new song and 