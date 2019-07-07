@extends('layouts.master')

@section('title', 'View All Films')

@section('content')



@foreach($results as $key=>$movie)
    <img src="https://image.tmdb.org/t/p/w500{{$movie['poster_path']}}">
    @php
    ++$key
    @endphp
@endforeach

@endsection
