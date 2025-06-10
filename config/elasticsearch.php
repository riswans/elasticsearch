<?php

return [

    'default' => env('ELASTICSEARCH_CONNECTION', 'default'),

    'connections' => [

        'default' => [

            'hosts' => [
                [
                    'host'   => env('ELASTICSEARCH_HOST', 'localhost'),
                    'port'   => env('ELASTICSEARCH_PORT', 9200),
                    'scheme' => env('ELASTICSEARCH_SCHEME', 'http'),
                    'user'   => env('ELASTICSEARCH_USER', 'elastic'),
                    'pass'   => env('ELASTICSEARCH_PASS', ''),
                ],
            ],

            'ssl_verification' => env('ELASTICSEARCH_SSL_VERIFICATION', true),

            'logging' => [
                'enabled' => env('ELASTICSEARCH_LOG', false),
                'level'   => env('ELASTICSEARCH_LOG_LEVEL', 'info'),
                'channel' => env('ELASTICSEARCH_LOG_CHANNEL', 'stack'),
            ],

        ],

    ],

];
