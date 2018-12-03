<?php

namespace App\Repositories;
use GuzzleHttp\Client;

class GuzzleHttpRequest 
{
    protected $apiKey;
    protected $client;
    public function __construct(Client $client) {
        $this->apiKey = env("TMDB_KEY", "1f54bd990f1cdfb230adb312546d765d");
        $this->client = $client;
    }

    protected function get($url, $page = 1, $additionParams = []) {
        $params = ['api_key' => $this->apiKey];
        if($page !== 1) {
            $params = array_merge( ['page' => $page], $params );
        }
        if(!empty( $additionParams )) {
            $params = array_merge( $additionParams, $params );
        }
        $response = $this->client->request('GET', $url, ['query' => $params]);
        return json_decode( $response->getBody()->getContents() );
    }

    //post, put, patch, delete...
}