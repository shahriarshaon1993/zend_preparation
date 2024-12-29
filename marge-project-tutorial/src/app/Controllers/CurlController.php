<?php

namespace App\Controllers;

use App\Attributes\Get;

class CurlController
{
    #[Get('/curl')]
    public function index(): void
    {
        $handle = curl_init();

        $url = 'https://example.com';

        curl_setopt($handle, CURLOPT_URL, $url);
        curl_setopt($handle, CURLOPT_RETURNTRANSFER, $url);

        $content = curl_exec($handle);

        // If check error
        if ($error = curl_error($handle)) {
            echo 'Curl error: ' . $error;
            exit;
        }

        echo '<pre>';
        var_dump(curl_getinfo($handle));
        echo '</pre>';

//        echo strlen($content);
    }

    #[Get('/curl/test-email')]
    public function emailTest(): void
    {
        $handle = curl_init();

        $apiKey = $_ENV['EMAILABLE_API_KEY'];
        $email = 'shahriarshaon1993@gmail.com';

        $params = [
            'api_key' => $apiKey,
            'email' => $email
        ];

        $url = 'https://api.emailable.com/v1/verify?'. http_build_query($params);

        curl_setopt($handle, CURLOPT_URL, $url);
        curl_setopt($handle, CURLOPT_RETURNTRANSFER, $url);

        $content = curl_exec($handle);

        if ($content !== false) {
            $data = json_decode($content, true);

            echo '<pre>';
            print_r($data);
            echo '</pre>';
        }
    }
}