<?php

declare(strict_types=1);

// Do not edit. Content will be replaced.
return [
    '/' => [
        'params' => [
            'yiisoft/aliases' => [
                'config/params.php',
            ],
            'yiisoft/cache-file' => [
                'config/params.php',
            ],
            'yiisoft/log-target-file' => [
                'config/params.php',
            ],
            'yiisoft/yii-console' => [
                'config/params.php',
            ],
            'yiisoft/yii-queue' => [
                'config/params.php',
            ],
            '/' => [
                'params.php',
            ],
        ],
        'di' => [
            'yiisoft/aliases' => [
                'config/di.php',
            ],
            'yiisoft/cache' => [
                'config/di.php',
            ],
            'yiisoft/cache-file' => [
                'config/di.php',
            ],
            'yiisoft/log-target-file' => [
                'config/di.php',
            ],
            'yiisoft/yii-queue-amqp' => [
                'config/di.php',
            ],
            'yiisoft/yii-queue' => [
                'config/di.php',
            ],
            'yiisoft/yii-event' => [
                'config/di.php',
            ],
            '/' => [
                'common/*.php',
            ],
        ],
        'events-console' => [
            'yiisoft/log' => [
                'config/events-console.php',
            ],
            'yiisoft/yii-console' => [
                'config/events-console.php',
            ],
            '/' => [
                '$events',
                'events-console.php',
            ],
        ],
        'events-web' => [
            'yiisoft/log' => [
                'config/events-web.php',
            ],
        ],
        'di-console' => [
            'yiisoft/yii-console' => [
                'config/di-console.php',
            ],
            'yiisoft/yii-event' => [
                'config/di-console.php',
            ],
            '/' => [
                '$di',
                'console/*.php',
            ],
        ],
        'di-web' => [
            'yiisoft/yii-event' => [
                'config/di-web.php',
            ],
        ],
        'params-console' => [
            '/' => [
                '$params',
            ],
        ],
        'bootstrap' => [
            '/' => [
                'bootstrap.php',
            ],
        ],
        'bootstrap-console' => [
            '/' => [
                '$bootstrap',
                'bootstrap-console.php',
            ],
        ],
        'events' => [
            '/' => [
                'events.php',
            ],
        ],
        'providers' => [
            '/' => [
                'providers.php',
            ],
        ],
        'providers-console' => [
            '/' => [
                '$providers',
                'providers-console.php',
            ],
        ],
        'delegates' => [
            '/' => [
                'delegates.php',
            ],
        ],
        'delegates-console' => [
            '/' => [
                '$delegates',
                'delegates-console.php',
            ],
        ],
    ],
    'dev' => [
        'params' => [
            '/' => [
                'test/params.php',
            ],
        ],
    ],
    'prod' => [
        'params' => [
            '/' => [
                'test/params.php',
            ],
        ],
    ],
    'test' => [
        'params' => [
            '/' => [
                'test/params.php',
            ],
        ],
    ],
];
