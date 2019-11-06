<?php

return [

    /*
    |--------------------------------------------------------------------------
<<<<<<< HEAD
    | Default Queue Driver
=======
    | Default Queue Connection Name
>>>>>>> origin/Arturo
    |--------------------------------------------------------------------------
    |
    | Laravel's queue API supports an assortment of back-ends via a single
    | API, giving you convenient access to each back-end using the same
<<<<<<< HEAD
    | syntax for each one. Here you may set the default queue driver.
    |
    | Supported: "sync", "database", "beanstalkd", "sqs", "redis", "null"
    |
    */

    'default' => env('QUEUE_DRIVER', 'sync'),
=======
    | syntax for every one. Here you may define a default connection.
    |
    */

    'default' => env('QUEUE_CONNECTION', 'sync'),
>>>>>>> origin/Arturo

    /*
    |--------------------------------------------------------------------------
    | Queue Connections
    |--------------------------------------------------------------------------
    |
    | Here you may configure the connection information for each server that
    | is used by your application. A default configuration has been added
    | for each back-end shipped with Laravel. You are free to add more.
    |
<<<<<<< HEAD
=======
    | Drivers: "sync", "database", "beanstalkd", "sqs", "redis", "null"
    |
>>>>>>> origin/Arturo
    */

    'connections' => [

        'sync' => [
            'driver' => 'sync',
        ],

        'database' => [
            'driver' => 'database',
            'table' => 'jobs',
            'queue' => 'default',
            'retry_after' => 90,
        ],

        'beanstalkd' => [
            'driver' => 'beanstalkd',
            'host' => 'localhost',
            'queue' => 'default',
            'retry_after' => 90,
<<<<<<< HEAD
=======
            'block_for' => 0,
>>>>>>> origin/Arturo
        ],

        'sqs' => [
            'driver' => 'sqs',
<<<<<<< HEAD
            'key' => env('SQS_KEY', 'your-public-key'),
            'secret' => env('SQS_SECRET', 'your-secret-key'),
            'prefix' => env('SQS_PREFIX', 'https://sqs.us-east-1.amazonaws.com/your-account-id'),
            'queue' => env('SQS_QUEUE', 'your-queue-name'),
            'region' => env('SQS_REGION', 'us-east-1'),
=======
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'prefix' => env('SQS_PREFIX', 'https://sqs.us-east-1.amazonaws.com/your-account-id'),
            'queue' => env('SQS_QUEUE', 'your-queue-name'),
            'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
>>>>>>> origin/Arturo
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => 'default',
<<<<<<< HEAD
            'queue' => 'default',
            'retry_after' => 90,
=======
            'queue' => env('REDIS_QUEUE', 'default'),
            'retry_after' => 90,
            'block_for' => null,
>>>>>>> origin/Arturo
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Failed Queue Jobs
    |--------------------------------------------------------------------------
    |
    | These options configure the behavior of failed queue job logging so you
    | can control which database and table are used to store the jobs that
    | have failed. You may change them to any database / table you wish.
    |
    */

    'failed' => [
<<<<<<< HEAD
=======
        'driver' => env('QUEUE_FAILED_DRIVER', 'database'),
>>>>>>> origin/Arturo
        'database' => env('DB_CONNECTION', 'mysql'),
        'table' => 'failed_jobs',
    ],

];
