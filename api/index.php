<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$_ENV['APP_STORAGE'] = '/tmp/storage';
$storagePath = $_ENV['APP_STORAGE'];

$directories = [
    "$storagePath/app/public",
    "$storagePath/framework/cache/data",
    "$storagePath/framework/sessions",
    "$storagePath/framework/views",
    "$storagePath/logs"
];

foreach ($directories as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }
}

// PAKSA LARAVEL MENGELUARKAN ERROR DALAM BENTUK JSON (Mengakali View yang rusak)
$_SERVER['HTTP_ACCEPT'] = 'application/json';

try {
    require __DIR__ . '/../public/index.php';
} catch (\Throwable $e) {
    // Jika masih tembus, tangkap di sini
    header('Content-Type: application/json');
    echo json_encode([
        'error' => $e->getMessage(),
        'file' => $e->getFile(),
        'line' => $e->getLine()
    ]);
}
