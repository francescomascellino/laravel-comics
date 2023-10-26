<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/characters', function () {
    return view('characters');
})->name('characters');

Route::get('/', function () {

    $comics = config('comics');

    return view('comics', compact('comics'));
})->name('comics');

// USANDO UN VALORE PASSATO NELLA ROUTE E' POSSIBILE CREARE PAGINE DINAMICHE SE IL VALORE CORRISPONDE A UN ELEMENTO DI UN ARRAY.
// IN QUESTO CASO CREIAMO UNA ROUTE /comic_detailsNUMERO_ID
// https://laravel.com/docs/10.x/routing#generating-urls-to-named-routes
Route::get('/comic_details{id}', function ($id) {

    $comics = config('comics');

    // IN QUESTO CASO VIENE DEFINITO CON $id IL FUMETTO DENTRO COMICS ALLA POSIZIONE $id
    $comic = $comics[$id];

    return view('comic_details', compact('comic'));
})->name('comic_details');


Route::get('/movies', function () {
    return view('movies');
})->name('movies');

Route::get('/tv', function () {
    return view('tv');
})->name('tv');

Route::get('/games', function () {
    return view('games');
})->name('games');

Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles');

Route::get('/videos', function () {
    return view('videos');
})->name('videos');

Route::get('/fans', function () {
    return view('fans');
})->name('fans');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');