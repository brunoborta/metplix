<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Movies;

class MoviesController extends Controller
{

    protected $movies;

    public function __construct(Movies $movies) {
        $this->movies = $movies;
    }

    public function index() {
        $movies = $this->movies->upcoming();
        return view('movies.index', compact('movies'));
    }

    public function search(Request $request) {
        $movies = $this->movies->search($request->input('query'));
        return view('movies.search', compact('movies'));
    }

    public function show($id) {
        $movie = $this->movies->find($id);
        return view('movies.show', compact('movie'));
    }
}
