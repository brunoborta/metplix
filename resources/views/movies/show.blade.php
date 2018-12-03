@extends('layout.app')

@section('content')
    <div class="movie-details">
        <h1>{{$movie->title}}</h1>
        <a href="/">Back to Home</a>
        <div class="card">
            <img class="card-img-top" src="http://image.tmdb.org/t/p/original//{{$movie->poster_path}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">{{$movie->overview}}</p>
                <small class="card-text">Release Date: {{$movie->release_date}}</small>
            </div>
        </div>
    </div>
@stop