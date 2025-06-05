<?php declare(strict_types=1);

return [
    'refresh_documents' => env('ELASTIC_SCOUT_DRIVER_REFRESH_DOCUMENTS', false),
    'client' => [
        'hosts' => [
            env('ELASTIC_HOST', 'localhost:9200'),
        ],
        'headers' => [
            'Authorization' => 'ApiKey ' . env('ELASTIC_API_KEY', null),
        ],
        'ssl_verification' => env('ELASTIC_SSL_VERIFY', false),
    ],

    'index' => [
        'prefix' => env('ELASTIC_INDEX_PREFIX', ''),
    ],
];
