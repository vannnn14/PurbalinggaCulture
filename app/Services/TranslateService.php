<?php

namespace App\Services;

use GuzzleHttp\Client;

class TranslateService
{
    protected $client;
    protected $baseUrl = 'https://libretranslate.de/translate';

    public function __construct()
    {
        $this->client = new Client();
    }

    public function translate($text, $source = 'id', $target = 'en')
    {
        $response = $this->client->post($this->baseUrl, [
            'form_params' => [
                'q' => $text,
                'source' => $source,
                'target' => $target,
                'format' => 'text'
            ]
        ]);

        $data = json_decode($response->getBody(), true);
        return $data['translatedText'] ?? '';
    }
}
