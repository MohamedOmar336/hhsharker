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
        $this->url = "https://graph.facebook.com/v19.0/" . env('WHATSAPP_PHONE_NUMBER_ID') . "/messages";
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


    /**
     * Send a template message to a specified phone number.
     *
     * @param string $phone The recipient's phone number.
     * @param string $templateName The name of the template.
     * @param array $parameters An array of parameters for the template.
     * @return array An array indicating success or failure.
     */
    public function sendTemplateMessage($phone, $templateName, $parameters)
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
                    'type' => 'template',
                    'template' => [
                        'name' => $templateName,
                        'language' => [
                            'code' => 'en'
                        ],
                        'components' => [
                            [
                                'type' => 'body',
                                'parameters' => $parameters
                            ]
                        ]
                    ]
                ]
            ]);

            return ['success' => true, 'data' => json_decode($response->getBody()->getContents(), true)];
        } catch (\GuzzleHttp\Exception\GuzzleException $e) {
            return ['success' => false, 'error' => $e->getMessage()];
        }
    }
}
