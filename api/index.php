<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// 1. Definisikan folder sementara di Vercel
$tmpDir = '/tmp/laravel';

// 2. Arahkan Storage dan Cache ke /tmp (Tanpa putenv yang rawan diblokir)
$caches = [
    'APP_SERVICES_CACHE' => $tmpDir . '/bootstrap/cache/services.php',
    'APP_PACKAGES_CACHE' => $tmpDir . '/bootstrap/cache/packages.php',
    'APP_CONFIG_CACHE'   => $tmpDir . '/bootstrap/cache/config.php',
    'APP_ROUTES_CACHE'   => $tmpDir . '/bootstrap/cache/routes.php',
    'APP_EVENTS_CACHE'   => $tmpDir . '/bootstrap/cache/events.php',
    'VIEW_COMPILED_PATH' => $tmpDir . '/storage/framework/views',
    'APP_STORAGE'        => $tmpDir . '/storage'
];

foreach ($caches as $key => $path) {
    $_ENV[$key] = $path;
    $_SERVER[$key] = $path;
}

// 3. Buat struktur folder secara dinamis
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

// 4. Tangkap error dalam format JSON
$_SERVER['HTTP_ACCEPT'] = 'application/json';

try {
    require __DIR__ . '/../public/index.php';
} catch (\Throwable $e) {
    header('Content-Type: application/json');
    echo json_encode([
        'error' => $e->getMessage(),
        'file'  => $e->getFile(),
        'line'  => $e->getLine()
    ]);
}
