<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\PlaylistDetailController;
use App\Http\Controllers\SongDetailController;
use App\Http\Controllers\GeckController;
use App\Http\Controllers\GenreController;

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

Route::get('/geck', [GeckController::class, "index"]);

Route::get('/genreform', [GenreController::class, "create"]);
Route::post('/genreform/store', [GenreController::class, "store"]);

Route::get('/songform', [SongController::class, "create"]);
Route::post('/songform/store', [SongController::class, "store"]);

Route::get('/playlistform', [PlaylistController::class, "create"]);
Route::post('/playlistform/store', [PlaylistController::class, "store"]);

// Route insert a new song and 