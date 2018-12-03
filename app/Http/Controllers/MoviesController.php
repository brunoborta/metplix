<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Movies;

class MoviesController extends Controller
{

    protected $movies;
    protected $currentPage;

    public function __construct(Movies $movies, Request $request) {
        $this->movies = $movies;
        if($request->query('page') !== null) {
            $this->currentPage = $request->query('page');
        } else {
            $this->currentPage = 1;
        }
    }

    public function index() {
        $movies = $this->movies->upcoming($this->currentPage);
        return view('movies.index', compact('movies'));
    }

    public function search(Request $request) {
        $movies = $this->movies->search($this->currentPage, $request->input('query'));
        return view('movies.search', compact('movies'), ['query' => $request->input('query')]);
    }

    public function show($id) {
        $movie = $this->movies->find($id);
        return view('movies.show', compact('movie'));
    }
}
