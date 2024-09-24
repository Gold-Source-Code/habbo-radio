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
Route::get('/melon/{song}', [SongController::class, "storetemp"])->name("melon");

Route::get('/playlist', [PlaylistController::class, "index"])->middleware('auth');

Route::get('/genre', [GenreController::class, "index"]);

Route::get('/playlistdetail/{playlist}', [PlaylistDetailController::class, "index"])->name("playlist_detail");

Route::get('/songdetail/{song}', [SongDetailController::class, "index"])->name("song_detail");

Route::get('/geck', [GeckController::class, "index"]);

Route::get('/genreform', [GenreController::class, "create"]);
Route::post('/genreform/store', [GenreController::class, "store"]);

Route::get('/songform', [SongController::class, "create"]);
Route::post('/songform/store', [SongController::class, "store"]);

Route::get('/playlistform', [PlaylistController::class, "create"]);
Route::post('/playlistform/store', [PlaylistController::class, "store"]);

Route::get('/addsongs', [PlaylistController::class, "addsong"])->middleware('auth');
Route::post('/addsongs/add', [PlaylistController::class, "add"]);
Route::get('/addsongs/transmit/{playlist}', [PlaylistController::class, "transmit"])->name("transmit");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';