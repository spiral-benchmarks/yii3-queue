<?php

declare(strict_types=1);

use App\Command\RunSimpleJobCommand;

return [
    'yiisoft/aliases' => [
        'aliases' => [
            '@root' => dirname(__DIR__),
            '@runtime' => '@root/runtime',
        ],
    ],

    'yiisoft/yii-console' => [
        'commands' => [
            RunSimpleJobCommand::$defaultName => RunSimpleJobCommand::class,
        ],
    ],

    'yiisoft/yii-queue' => [
        'handlers' => [
            'simple-job' => [new App\Jobs\SimpleJob, 'handle']
        ],
        'channel-definitions' => [
            'amqp' => [
                'class' => Yiisoft\Yii\Queue\AMQP\Adapter::class,
            ],
        ],
    ],

    'yiisoft/cache-file' => [
        'fileCache' => [
            'path' => '@runtime/cache',
        ],
    ],
];
