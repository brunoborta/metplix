@extends('layout.app')

@section('content')
    <h1>Upcoming Movies</h1>
    @component('components.form')
    @endcomponent

    @foreach (collect($movies->results)->chunk(4) as $chunk)
    <div class="row">
        @foreach ($chunk as $movie)
        <div class="col-3">
            <a href="/movies/{{$movie->id}}">
                <img class="card-img-top" src="http://image.tmdb.org/t/p/w185//{{$movie->poster_path}}" alt="Movie poster image">
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

    @component('components.pagination', [
        'requestType' => '/',
        'previousPage' => $movies->page - 1,
        'currentPage' => $movies->page,
        'nextPage' => $movies->page + 1,
        'lastPage' => $movies->total_pages])
    @endcomponent
@stop