<?php

namespace App\Util;

use GuzzleHttp\Client;

class Proff
{
    protected $client;

    public $baseURI;

    public function __construct(Client $client)
    {
        $headers = [
            'Content-Type' => 'application/json',
            'AccessToken' => env('PROFF_TOKEN'),
            'Authorization' => 'Bearer token',
        ];

        $this->client = $client;
        $this->client['headers'] = $headers;
        $this->baseURI = env('PROFF_BASE_URL');
    }

    public function hent_enhet($org_nr)
    {
        return $this->endpointRequest($this->baseURI . '/' . $org_nr);
    }

    public function endpointRequest($url)
    {
        try {
            $response = $this->client->request('GET', $url);
        } catch (\Exception $e) {
            return [];
        }

        return $this->response_handler($response->getBody()->getContents());
    }

    public function response_handler($response)
    {

        if ($response) {
            return json_decode($response);
        }

        return [];
    }
}
