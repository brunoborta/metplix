<?php

namespace App\Repositories;
use GuzzleHttp\Client;

class Movies extends GuzzleHttpRequest
{
    public function upcoming() {
        return $this->get('movie/upcoming');
    }

    public function find($id) {
        return $this->get("movie/{$id}");
    }

    public function search($query) {
        return $this->get('search/movie', ['query' => $query]);
    }
}
