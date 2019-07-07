<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tmdb\Laravel\Facades\Tmdb;

class AppController extends Controller
{
    public function test()
    {
        //$movie = Tmdb::getMoviesApi()->getMovie(100);
        $movies = Tmdb::getSearchApi()->searchMovies('avengers');
        $results = $movies["results"];
        return view('filmist/index', ['results' => $results]);
    }
}
