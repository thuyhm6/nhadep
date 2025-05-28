<?php

namespace App\Services;

use Google\Client;
use Google\Service\Sheets;
use Google\Service\Sheets\ValueRange;

class GoogleSheetsService
{
    protected Sheets $service;
    protected string $spreadsheetId;

    public function __construct()
    {
        $base64 = env('GOOGLE_CREDENTIALS_BASE64');
        $decoded = base64_decode($base64);

        $path = storage_path('app/google/runtime_credentials.json');
        if (!is_dir(dirname($path))) {
            mkdir(dirname($path), 0755, true);
        }
        file_put_contents($path, $decoded);

        $client = new Client();
        $client->setAuthConfig($path);
        $client->setScopes([Sheets::SPREADSHEETS, Sheets::DRIVE]);

        $this->service = new Sheets($client);
        $this->spreadsheetId = env('GOOGLE_SHEET_ID');
    }

    public function appendRow(array $data, string $sheet = 'Sheet1'): int
    {
        $body = new ValueRange([
            'values' => [$data],
        ]);

        $params = ['valueInputOption' => 'RAW'];

        $result = $this->service->spreadsheets_values->append(
            $this->spreadsheetId,
            "{$sheet}",
            $body,
            $params
        );

        return $result->getUpdates()->getUpdatedCells();
    }
}
