<?php

if (!function_exists('sendNotification')) {
    /**
     * MOMAr - Send Notification API.
     *
     * @param string $data
     *
     * @return json
     */
    function sendNotification($data)
    {
        $SERVER_API_KEY = \App\Enums\EnumsSettings::firebase['server_key'];

        $fields = [
            'notification' => [
                "title" => $data['title'],
                "body" => $data['message'],
                'vibrate' => 1,
                'sound' => "default"
            ],
            'webpush' => [
                "headers" => ['image' => 'https://foo.bar/pizza-monster.png'],
                "body" => $data['message'],
                'vibrate' => 1,
                'sound' => "default"
            ],
            "priority" => "high",
            "title" => $data['title'],
            "body" => $data['message'],
        ];

        if ($data['type'] == 'registration_ids') {
            $fields['registration_ids'] = $data['token'];
        } elseif ($data['type'] == 'topics') {
            $fields['to'] = "/" . $data['type'] . "/" . $data['token'];
        }
        if (isset($data['data'])) {
            $fields['notification']['click_action'] = $data['data']['openURL'];
            $fields['data'] = $data['data'];
        }
        $dataString = json_encode($fields);

        $headers = [
            'Authorization: key=' . $SERVER_API_KEY,
            'Content-Type: application/json',
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);
        $response = curl_exec($ch);
        curl_close($ch);

        return $response;
    }
}

if (!function_exists('sendWhatsApp')) {
   /**
     * MOMAr - Send Whatsapp API.
     *
     * @param string $phone
     * @param string $otp
     *
     * @return json
     */
    function sendWhatsApp($phone, $otp){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'whatsappBusses/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, []);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, []);
        $response = curl_exec($ch);
        curl_close($ch);
        dd($response);
        return;
    }
}


