<?php

declare(strict_types=1);

use App\CacheLoop;
use PhpAmqpLib\Connection\AbstractConnection;
use Psr\Container\ContainerInterface;
use Yiisoft\Yii\Queue\AMQP\MessageSerializer;
use Yiisoft\Yii\Queue\AMQP\MessageSerializerInterface;
use Yiisoft\Yii\Queue\AMQP\QueueProvider;
use Yiisoft\Yii\Queue\AMQP\QueueProviderInterface;
use Yiisoft\Yii\Queue\AMQP\Settings\Queue;
use Yiisoft\Yii\Queue\AMQP\Settings\QueueSettingsInterface;
use Yiisoft\Yii\Queue\Cli\LoopInterface;


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
        'class' => \PhpAmqpLib\Connection\AMQPSocketConnection::class,
        '__construct()' => [
            'host' => '127.0.0.1',
            'port' => 5672,
            'user' => 'guest',
            'password' => 'guest',
            'keepalive' => true,
        ],
    ],

    LoopInterface::class => static function (ContainerInterface $container): LoopInterface {
        return $container->get(CacheLoop::class);
    },
];
