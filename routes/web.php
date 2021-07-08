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

//Home
Route::get('/', function () {
    return view('home');
})->name('home');

//Characters
Route::get('/characters', function () {
    return view('characters');
})->name('characters');
//comics
//movies
//tv
//games
//collectibles
//videos
//fans
//news
//shop