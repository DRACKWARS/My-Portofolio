<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Bypass folder storage ke /tmp
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

// Tangkap SEMUA error dari Laravel dan cetak paksa
try {
    require __DIR__ . '/../public/index.php';
} catch (\Throwable $e) {
    echo "<h1 style='color:red;'>CRASH DARI DALAM LARAVEL:</h1>";
    echo "<pre style='background:#f4f4f4; padding:15px; border:1px solid #ddd;'>";
    echo "<strong>Pesan:</strong> " . $e->getMessage() . "\n\n";
    echo "<strong>File:</strong> " . $e->getFile() . " baris " . $e->getLine() . "\n\n";
    echo "<strong>Trace:</strong>\n" . $e->getTraceAsString();
    echo "</pre>";
}
