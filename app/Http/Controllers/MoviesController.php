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
        $pagination = $this->createPagination($movies->page, $movies->total_pages, '/');
        return view('movies.index', compact('movies', 'pagination'));
    }

    public function search(Request $request) {
        $movies = $this->movies->search($this->currentPage, $request->input('query'));
        $searchQuery = ['query' => $request->input('query')];
        $pagination = $this->createPagination($movies->page, $movies->total_pages, '/search', $searchQuery);
        return view('movies.search', compact('movies', 'pagination'), $searchQuery);
    }

    public function show($id) {
        $movie = $this->movies->find($id);
        return view('movies.show', compact('movie'));
    }

    private function createPagination($currentPage, $lastPage, $baseUrl, $additionalQuery = []) {
        $previous = $currentPage - 1;
        $next = $currentPage + 1;

        $previousPageUrl = "{$baseUrl}?page={$previous}";
        $nextPageUrl = "{$baseUrl}?page={$next}";
        if(!empty($additionalQuery)) {
            foreach($additionalQuery as $key => $value) {
                $previousPageUrl .= "&{$key}={$value}";
                $nextPageUrl .= "&{$key}={$value}";
            }
        }
        return (object) array(
            'previousPage' => $previous,
            'currentPage' => $currentPage,
            'nextPage' => $next,
            'lastPage' => $lastPage,
            'previousPageUrl' => $previousPageUrl,
            'nextPageUrl' => $nextPageUrl,
        );
    }
}
