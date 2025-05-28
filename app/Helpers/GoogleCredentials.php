<?php

namespace App\Helpers;

class GoogleCredentials
{
    public static function create(): string
    {
        $path = storage_path('app/google/runtime_credentials.json');

        if (!file_exists($path)) {
            $base64 = env('GOOGLE_CREDENTIALS_BASE64');
            if (!$base64) {
                throw new \Exception('GOOGLE_CREDENTIALS_BASE64 không tồn tại trong .env');
            }

            $decoded = base64_decode($base64);
            if (!$decoded) {
                throw new \Exception('Chuỗi base64 không hợp lệ');
            }

            file_put_contents($path, $decoded);
        }

        return $path;
    }
}

