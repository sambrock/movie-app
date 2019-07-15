@extends('layouts.master')

@section('title', 'View All Films')

@section('content')

<div class="sub-nav-wrapper">

</div>

<div class="poster-list watched">
    @foreach($results as $movie)
    <div class="poster-container">
        <div class="poster-img-container">
            <img src="https://image.tmdb.org/t/p/w500{{$movie['poster_path']}}" class="poster-img">
        </div>
    </div>
    @endforeach

</div>

<form action="{{url('log')}}" method="POST">
    {{ csrf_field() }}
    <label for="name">Name:</label>
    <input type="text" id="movie-search" name="name">
    <label for="rating">Rating:</label>
    <input type="text" id="rating" name="rating">
    <input type="hidden" id="movie_id" name="movie_id" value="">
    <input type="submit" name="submitBtn" value="Add Film">
</form>
<div class="ac-results">

</div>

@endsection
