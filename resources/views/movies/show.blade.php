@extends('layout.app')

@section('content')
    <div class="movie-details">
        <div class="row">
            <div class="col">
                <h1>{{$movie->title}}</h1>
                <a href="/">Back to Home</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <img src="http://image.tmdb.org/t/p/w500//{{$movie->poster_path}}" alt="Movie poster image">
            </div>
            <div class="col-md-6 col-xs-12">
                <h3>Overview</h3>
                <p>{{$movie->overview}}</p>

                <h3>Genres</h3>
                <ul>
                    @foreach ($movie->genres as $genre)
                        <li>{{$genre->name}}</li>
                    @endforeach
                </ul>

                <h3>Release Date</h3>
                <p>{{$movie->release_date}}</p>
            </div>
        </div>
    </div>
@stop