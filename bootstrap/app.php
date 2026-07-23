<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

// 1. Deteksi jika berjalan di Vercel, lalu pindahkan storage ke /tmp
if (isset($_ENV['VERCEL'])) {
    $_ENV['APP_STORAGE'] = '/tmp/storage';
    $storagePath = $_ENV['APP_STORAGE'];
    
    // Buat struktur folder sementara agar Laravel tidak kebingungan
    $dirs = ['app/public', 'framework/cache/data', 'framework/sessions', 'framework/views', 'logs'];
    foreach ($dirs as $dir) {
        if (!is_dir("$storagePath/$dir")) {
            mkdir("$storagePath/$dir", 0777, true);
        }
    }
}

$app = Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

// 2. Beritahu instance Laravel untuk menggunakan folder /tmp tadi
if (isset($_ENV['VERCEL'])) {
    $app->useStoragePath($_ENV['APP_STORAGE']);
}

return $app;
