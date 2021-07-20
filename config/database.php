<?php

$config = new Yaf\Config\Ini(APPLICATION_CONFIGURATION_PATH, getYafEnviron());

return [
    'default' => 'mysql',

    'connections' => [

        'mysql' => [
            'mysql' => [
                'driver' => 'mysql',
                'host' => $config->get('mysql.params.host'),
                'port' => $config->get('mysql.params.port') ?? 3306,
                'database' => $config->get('mysql.params.database'),
                'username' => $config->get('mysql.params.username'),
                'password' => $config->get('mysql.params.password'),
                'charset' => 'utf8mb4',
                'collation' => 'utf8mb4_unicode_ci',
            ]
        ],

        'mongodb' => [
            'mongodb' => [
                'driver' => 'mongodb',
                'host' => $config->get('mongodb.params.host'),
                'port' => $config->get('mongodb.params.port') ?? 27037,
                'database' => $config->get('mongodb.params.database'),
                'username' => $config->get('mongodb.params.username'),
                'password' => $config->get('mongodb.params.password'),
            ]
        ],

        'cache' => [
            'default' => [
                'driver' => 'redis',
                'host' => $config->get('redis.params.host') ?? '127.0.0.1',
                'port' => $config->get('redis.params.port') ?? 6379,
                'password' => $config->get('redis.params.password') ?? '',
                'database' => $config->get('redis.params.database') ?? 0,
                'prefix' => $config->get('redis.params.prefix') ?? APP_NAME . ":",
            ],
        ]
    ],
];