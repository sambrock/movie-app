<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tmdb\Laravel\Facades\Tmdb;
use App\Seen;
use Auth;
use Carbon\Carbon;

class AppController extends Controller
{
    public function test()
    {
        $movies = Tmdb::getMoviesApi()->getRecommendations(18);
        $results = $movies["results"];
        return view('filmist/index', ['results' => $results]);
    }
    public function search($searchTerm)
    {
        $movies = Tmdb::getSearchApi()->searchMovies($searchTerm);
        $results = $movies["results"];
        return response()->json(['results' => $results]);
    }
    public function log(Request $request)
    {
        $user_id = Auth::id();

        $seen = new Seen();
        $seen->user_id = $user_id;
        $seen->movie_id = $request->movie_id;
        $seen->rating = $request->rating;
        $seen->save();

        return redirect('/');
    }
    public function seen()
    {
        $user_id = Auth::id();
        $movies = Seen::where('user_id', $user_id)->get();

        $results = [];

        foreach($movies as $movie)
        {
            $result = Tmdb::getMoviesApi()->getMovie($movie['movie_id']);
            array_push($results, $result);
        }

        return view('filmist/seen', ['results' => $results]);
    }
}
