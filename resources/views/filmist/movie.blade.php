@extends('layouts.master')

@section('title', 'View All Films')

@section('content')
<div class="backdrop-container">
    <img src="https://image.tmdb.org/t/p/w1280{{$movie['backdrop_path']}}">
</div>
<div class="movie-details-container">
    <div class="movie-details">
        <h1 class="movie-title">{{$movie['title']}}</h1>
        <div class="movie-info">
            <span>{{$movie['release_date']}}</span>
        </div>
        <div class="movie-summary">
            <span class="movie-header">SUMMARY</span>
            {{$movie['overview']}}
        </div>
    </div>

</div>
<div class="movie-poster">
    <!--    <img id="movie-poster" src="https://image.tmdb.org/t/p/original{{$movie['poster_path']}}" crossorigin="anonymous">-->
</div>
@endsection
