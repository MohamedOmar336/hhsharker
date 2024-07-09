<?php
namespace App\Services;

use GuzzleHttp\Client;

class WhatsAppService
{
    protected $client;
    protected $url;

    public function __construct()
    {
        $this->client = new Client();
        $this->url = "https://graph.facebook.com/v13.0/" . env('WHATSAPP_PHONE_NUMBER_ID') . "/messages";
    }

    public function sendMessage($phone, $message)
    {
        try {
            $response = $this->client->post($this->url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . env('WHATSAPP_TOKEN'),
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'messaging_product' => 'whatsapp',
                    'to' => $phone,
                    'text' => ['body' => $message]
                ]
            ]);

            return ['success' => true, 'data' => json_decode($response->getBody()->getContents(), true)];
        } catch (\GuzzleHttp\Exception\GuzzleException $e) {
            return ['success' => false, 'error' => $e->getMessage()];
        }
    }
}
