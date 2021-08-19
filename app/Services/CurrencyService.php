<?php

declare(strict_types=1);

namespace App\Services;

class CurrencyService
{
    private string $host = 'currency-converter5.p.rapidapi.com';
    private string $url  = 'https://currency-converter5.p.rapidapi.com/currency/convert';

    public function __construct(protected RapidApiService $rapidApiService)
    {
    }

    public function convert(string $from, string $to, float $amount): float
    {
        $response = $this->rapidApiService->get($this->host, $this->url, compact('from', 'to', 'amount'));

        if ($response->failed()) {
            throw new \RuntimeException('Failed to convert currency', $response->status());
        }

        return (float) $response->json('rates.' . $to . '.rate_for_amount');
    }
}
