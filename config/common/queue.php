<?php

declare(strict_types=1);

use App\CacheLoop;
use PhpAmqpLib\Connection\AbstractConnection;
use PhpAmqpLib\Connection\AMQPSocketConnection;
use Psr\Container\ContainerInterface;
use Yiisoft\Yii\Queue\AMQP\MessageSerializer;
use Yiisoft\Yii\Queue\AMQP\MessageSerializerInterface;
use Yiisoft\Yii\Queue\AMQP\QueueProvider;
use Yiisoft\Yii\Queue\AMQP\QueueProviderInterface;
use Yiisoft\Yii\Queue\AMQP\Settings\Queue;
use Yiisoft\Yii\Queue\AMQP\Settings\QueueSettingsInterface;
use Yiisoft\Yii\Queue\Cli\LoopInterface;
use Yiisoft\Yii\Queue\Cli\SignalLoop;


return [
    MessageSerializerInterface::class => MessageSerializer::class,
    QueueProviderInterface::class => QueueProvider::class,
    QueueSettingsInterface::class => [
        'class' => Queue::class,
        '__construct()' => [
            'durable' => true,
            'autoDelete' => false
        ],
    ],
    AbstractConnection::class => [
        'class' => AMQPSocketConnection::class,
        '__construct()' => [
            'host' => 'amqp',
            'port' => 5672,
            'user' => 'guest',
            'password' => 'guest',
            'keepalive' => true,
        ],
    ],

    LoopInterface::class => SignalLoop::class
];
