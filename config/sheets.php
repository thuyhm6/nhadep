<?php
'use strict';

use App\Helpers\GoogleCredentials;

return [
    'spreadsheet_id' => env('GOOGLE_SHEET_ID'),

    'service' => [
        'enabled' => true,
        'file'    => GoogleCredentials::create(),
        'auth'    => 'service',
        'scopes'  => [
            Google\Service\Sheets::SPREADSHEETS,
            Google\Service\Drive::DRIVE,
        ],
    ],
];
    
