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
Route::get('/storetemp/{song}', [SongController::class, "storetemp"])->name("storetemp");
Route::get('/removetemp/{song}', [SongController::class, "removetemp"])->name("removetemp");

Route::get('/playlist', [PlaylistController::class, "index"])->middleware('auth');

Route::get('/genre', [GenreController::class, "index"]);
Route::get('/genre/{genre}', [GenreController::class, "selectgenre"])->name("selectgenre");

Route::get('/playlistdetail/{playlist}', [PlaylistDetailController::class, "index"])->name("playlist_detail");

Route::get('/songdetail/{song}', [SongDetailController::class, "index"])->name("song_detail");

Route::get('/geck', [GeckController::class, "index"]);

Route::get('/genreform', [GenreController::class, "create"]);
Route::post('/genreform/store', [GenreController::class, "store"]);

Route::get('/songform', [SongController::class, "create"]);
Route::post('/songform/store', [SongController::class, "store"]);

Route::get('/playlistform', [PlaylistController::class, "create"])->name("playlistform");
Route::post('/playlistform/store', [PlaylistController::class, "store"]);

Route::get('/addsongs', [PlaylistController::class, "addsong"])->middleware('auth');
Route::post('/addsongs/add', [PlaylistController::class, "add"]);
Route::get('/addsongs/transmit/{playlist}', [PlaylistController::class, "transmit"])->name("transmit");

Route::get('/selectplaylist', [PlaylistController::class, "selectplaylist"])->middleware('auth');
Route::post('/sendtors', [PlaylistController::class, "sendtors"]);
Route::get('/removesong/{playlist}', [PlaylistController::class, "removesong"])->name("removesong")->middleware('auth');
Route::post('/removesong/{playlist}/remove', [PlaylistController::class, "remove"]);

Route::get('/tempplaylistdetail', [PlaylistController::class, "showtempplaylist"]);

Route::get('/updategenre', [GenreController::class, "updategenre"]);
Route::post('/updategenre/update', [GenreController::class, "update"])->name("updategenre");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';