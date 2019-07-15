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
@endsection
