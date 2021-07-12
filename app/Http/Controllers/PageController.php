<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class PageController extends Controller
{
    public function index()
    {
       //prendere i dati

       //restituire una view
       return view('characters');
    }


    public function comics()
    {
        $fumetti= config('comics.data');

    /*
    Se voglio andare una determinata categoria di fumetti posso usare collection
    $fumetti_collection = collect($fumetti);
    $fumetti_book = $fumetti_collection->where('type', 'comic book');
    */

    $data = [
        'fumetti_book' => $fumetti,
    ];
    return view('comics.index', $data);
    }


    public function comic($id)
    {
        $fumetti= config('comics.data');

    if(is_numeric($id) && $id < count($fumetti) && $id >= 0){

        $comic= $fumetti[$id];
    
        return view('comics.show', compact('comic'));
    }else{
        abort(404);
    }
    }




    public function movies()
    {
        $movies = Movie::all();


        return view('movies', compact('movies'));
    }



    

    public function tv()
    {
        return view('tv');
    }

    public function games()
    {
        return view('games');
    }

    public function collectibles()
    {
        return view('collectibles');
    }
    public function videos()
    {
        return view('videos');
    }
    public function fans()
    {
        return view('fans');
    }
    
    public function shop()
    {
        return view('shop');
    }
}