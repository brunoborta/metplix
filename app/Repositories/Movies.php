<?php

namespace App\Repositories;
use GuzzleHttp\Client;

class Movies extends GuzzleHttpRequest
{
    public function upcoming($page) {
        return $this->get('movie/upcoming', $page);
    }

    public function find($id) {
        return $this->get("movie/{$id}");
    }

    public function search($page, $query) {
        return $this->get('search/movie', $page, ['query' => $query]);
    }
}
