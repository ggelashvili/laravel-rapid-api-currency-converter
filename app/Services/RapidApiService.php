<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class RapidApiService
{
    public function __construct(protected string $key)
    {
    }

    public function get(string $host, string $url, array $params)
    {
        return Http::withHeaders(
            [
                'x-rapidapi-host' => $host,
                'x-rapidapi-key'  => $this->key,
            ]
        )->get($url, $params);
    }
}
