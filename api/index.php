<?php

// 1. Definisikan folder sementara di Vercel
$tmpDir = '/tmp/laravel';

// 2. Arahkan direktori Storage ke /tmp
$_ENV['APP_STORAGE'] = $tmpDir . '/storage';
putenv('APP_STORAGE=' . $_ENV['APP_STORAGE']);

// 3. PAKSA Laravel mengabaikan file Cache hasil Build Vercel (Ini kunci penyelesaiannya!)
$caches = [
    'APP_SERVICES_CACHE' => $tmpDir . '/bootstrap/cache/services.php',
    'APP_PACKAGES_CACHE' => $tmpDir . '/bootstrap/cache/packages.php',
    'APP_CONFIG_CACHE'   => $tmpDir . '/bootstrap/cache/config.php',
    'APP_ROUTES_CACHE'   => $tmpDir . '/bootstrap/cache/routes.php',
    'APP_EVENTS_CACHE'   => $tmpDir . '/bootstrap/cache/events.php',
    'VIEW_COMPILED_PATH' => $tmpDir . '/storage/framework/views'
];

foreach ($caches as $key => $path) {
    $_ENV[$key] = $path;
    $_SERVER[$key] = $path;
    putenv("$key=$path"); // Memastikan environment variabel terbaca oleh framework
}

// 4. Buat struktur folder secara dinamis (tanpa perlu membuat file/kelas baru di repositori)
$directories = [
    $tmpDir . '/storage/app/public',
    $tmpDir . '/storage/framework/cache/data',
    $tmpDir . '/storage/framework/sessions',
    $tmpDir . '/storage/framework/views',
    $tmpDir . '/bootstrap/cache',
    $tmpDir . '/storage/logs'
];

foreach ($directories as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }
}

// 5. Panggil mesin utama Laravel
require __DIR__ . '/../public/index.php';
