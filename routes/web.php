<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $appName = env('APP_NAME', 'Hostwares Test Laravel');
    $dbHost = env('DB_HOST', 'not configured');
    $mailDriver = env('MAIL_MAILER', 'not set');
    $redisHost = env('REDIS_HOST', 'not set');

    return response()->json([
        'status' => '🚀 Running on Hostwares!',
        'app_name' => $appName,
        'framework' => 'Laravel 11',
        'php_version' => PHP_VERSION,
        'environment' => [
            'DB_HOST' => $dbHost,
            'MAIL_MAILER' => $mailDriver,
            'REDIS_HOST' => $redisHost,
            'APP_ENV' => env('APP_ENV', 'production'),
        ],
        'deployed_at' => now()->toISOString(),
    ]);
});
