<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Characters
Route::get('/characters', function () {
    return view('characters');
})->name('characters');

//comics
Route::get('/comics', function () {
    $fumetti= config('comics');
    $fumetti_collection = collect($fumetti);
    $fumetti_book = $fumetti_collection->where('type', 'comic book');
    //dd($fumetti_book);

    $data = [
        'fumetti_book' => $fumetti_book,
    ];
    return view('comics', $data);
})->name('comics');

//movies
Route::get('/movies', function () {
    return view('movies');
})->name('movies');


//tv
Route::get('/tv', function () {
    return view('tv');
})->name('tv');


//games
Route::get('/games', function () {
    return view('games');
})->name('games');

//collectibles
Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles');

//videos
Route::get('/videos', function () {
    return view('videos');
})->name('videos');

//fans
Route::get('/fans', function () {
    return view('fans');
})->name('fans');

//news
Route::get('/news', function () {
    return view('news');
})->name('news');

//shop
Route::get('/shop', function () {
    return view('shop');
})->name('shop');