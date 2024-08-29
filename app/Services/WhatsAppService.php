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

    /**
     * Send a broadcast message to multiple phone numbers.
     *
     * This method sends a single message to a list of phone numbers using WhatsApp's messaging API.
     * It iterates over each phone number, sends the specified message, and records the success or failure
     * of each attempt.
     *
     * @param array $phones Array of recipient phone numbers.
     * @param string $message The message text to be sent to all recipients.
     * @return array An array of results, with each entry containing the success status and data or error message for each phone number.
     */
    public function sendBroadcastMessage(array $phones, $message)
    {
        $results = [];

        foreach ($phones as $phone) {
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

                $results[$phone] = [
                    'success' => true,
                    'data' => json_decode($response->getBody()->getContents(), true)
                ];
            } catch (\GuzzleHttp\Exception\GuzzleException $e) {
                $results[$phone] = [
                    'success' => false,
                    'error' => $e->getMessage()
                ];
            }
        }

        return $results;
    }

    public function sendTemplateMessageDynamic($phone, $templateName, $components) {
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
                            'code' => 'en_US'
                        ],
                        'components' => $components
                    ]
                ]
            ]);

            return ['success' => true, 'data' => json_decode($response->getBody()->getContents(), true)];
        } catch (\Exception $e) {
            return ['success' => false, 'error' => $e->getMessage()];
        }
    }
}
