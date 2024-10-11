<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;

class WhatsAppService
{
    protected $client;
    protected $url;
    protected $uploadsUrl;
    protected $mediaUrl;

    public function __construct()
    {
        $this->client = new Client();
        $this->url = "https://graph.facebook.com/v19.0/" . env('WHATSAPP_PHONE_NUMBER_ID') . "/messages";
        $this->uploadsUrl = "https://graph.facebook.com/v19.0/" . env('WHATSAPP_PHONE_NUMBER_ID') . "/app/uploads/";
        $this->mediaUrl = "https://graph.facebook.com/v19.0/" . env('WHATSAPP_PHONE_NUMBER_ID') . "/media";

    }

    /**
     * Sends a message to a specific phone number via WhatsApp API.
     *
     * This method can send different types of messages based on the provided parameters including text,
     * image, video, document, and audio messages. For media messages, a pre-uploaded media ID is required.
     *
     * @param string $phone The phone number of the recipient.
     * @param string $mediaId The media ID received from the uploadMedia function. Required for media messages.
     * @param string $type The type of message to send ('text', 'image', 'video', 'document', 'audio').
     * @param string|null $caption Optional caption for media messages. Applies to images and videos.
     * @param string|null $filename Optional filename for document messages.
     * @return array An associative array containing the success status and data or error message.
     */
    public function sendMessage($phone, $mediaId = null, $type, $caption = null, $filename = null)
    {
        $body = [
            'messaging_product' => 'whatsapp',
            'recipient_type' => 'individual',
            'to' => $phone,
            'type' => $type,
        ];

        switch ($type) {
            case 'text':
                $body['text'] = ['body' => $mediaId];  // Assuming mediaId parameter holds the text when type is 'text'
                break;
            case 'image':
                $body['image'] = ['id' => $mediaId];
                break;
            case 'video':
                $body['video'] = ['id' => $mediaId, 'caption' => $caption];
                break;
            case 'document':
                $body['document'] = ['id' => $mediaId, 'caption' => $caption, 'filename' => $filename];
                break;
            case 'audio':
                $body['audio'] = ['id' => $mediaId];
                break;
        }

        try {
            $response = $this->client->post($this->url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . env('WHATSAPP_TOKEN'),
                    'Content-Type' => 'application/json'
                ],
                'json' => $body
            ]);

            return ['success' => true, 'data' => json_decode($response->getBody()->getContents(), true)];
        } catch (GuzzleException $e) {
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

    public function sendTemplateMessageDynamic($phone, $templateName) {
        try {
            $components = [
                [
                    'type' => 'body',
                    'parameters' => [
                        [
                            'type' => 'text',
                            'text' => 'Hello, this is a static test message!'
                        ]
                    ]
                ]
            ];

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
            dd($response);
            return ['success' => true, 'data' => json_decode($response->getBody()->getContents(), true)];
        } catch (\Exception $e) {
            dd($e->getMessage());
            return ['success' => false, 'error' => $e->getMessage()];
        }
    }

    /**
     * Uploads media to WhatsApp using the WhatsApp API.
     *
     * This function uploads a file to WhatsApp and retrieves a media ID that can be used
     * for sending media messages. It handles sending the file as multipart/form-data.
     *
     * @param \Illuminate\Http\UploadedFile $file The file object from the request.
     * @return array An associative array containing the success status and the media ID or an error message.
     */
    public function uploadMedia($file)
    {
        try {
            // Prepare the multipart form data for the file upload
            $response = $this->client->post($this->mediaUrl, [
                'headers' => [
                    'Authorization' => 'Bearer ' . env('WHATSAPP_TOKEN'),
                ],
                'multipart' => [
                    [
                        'name' => 'messaging_product',
                        'contents' => 'whatsapp'
                    ],
                    [
                        'name' => 'file',
                        'contents' => fopen($file->getPathname(), 'r'),
                        'filename' => $file->getClientOriginalName(),
                    ]
                ]
            ]);

            // Decode the response body to get the media ID
            $data = json_decode($response->getBody()->getContents(), true);

            // Return the media ID if the upload was successful
            return [
                'success' => true,
                'media_id' => $data['id'] ?? null
            ];
        } catch (GuzzleException $e) {
            // Return an error response if the upload fails
            return [
                'success' => false,
                'error' => $e->getMessage()
            ];
        }
    }
}
