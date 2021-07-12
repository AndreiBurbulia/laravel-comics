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
Route::get('/characters', 'PageController@index')->name('characters');

//comics
Route::get('/', 'PageController@comics')->name('comics');
Route::get('comics/{id}', 'PageController@comic')->name('comic');

//movies
Route::get('/movies', 'PageController@movies')->name('movies');

//tv
Route::get('/tv', 'PageController@tv')->name('tv');


//games
Route::get('/games', 'PageController@games')->name('games');

//collectibles
Route::get('/collectibles', 'PageController@collectibles')->name('collectibles');

//videos
Route::get('/videos', 'PageController@videos')->name('videos');

//fans
Route::get('/fans', 'PageController@fans')->name('fans');

//news
Route::get('/news', 'PostController@index')->name('news');

//shop
Route::get('/shop', 'PageController@shop')->name('shop');