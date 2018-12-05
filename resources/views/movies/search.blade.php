@extends('layout.app')

@section('content')
    <h1>Searched Movies</h1>
    @component('components.form')
    @endcomponent
    <a href="/">Back to Home</a>

    @if($movies->total_results !== 0)
        @foreach (collect($movies->results)->chunk(4) as $chunk)
        <div class="row">
            @foreach ($chunk as $movie)
            <div class="poster col-sm-3 col-xs-12">
                <a href="/movies/{{$movie->id}}">
                    @if($movie->poster_path !== null)
                    <img class="card-img-top" src="http://image.tmdb.org/t/p/w185//{{$movie->poster_path}}" alt="Movie poster image">
                    @else
                    <img class="card-img-top" src="images/error-poster.jpg" alt="Default movie poster image">
                    @endif
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{$movie->title}}</h5>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        @endforeach
        @component('components.pagination', ['pagination' => $pagination])
        @endcomponent
    @else
    <div class="alert alert-danger" role="alert">
        No results were found.
    </div>
    @endif
@stop