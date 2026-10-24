<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Enable fast gzip document compression if supported
if (!ob_get_level() && extension_loaded('zlib') && !headers_sent()) {
    ini_set('zlib.output_compression', 'On');
    ini_set('zlib.output_compression_level', '6');
}

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

// Normalize subfolder baseUrl when hosted in XAMPP htdocs/zenweb
if (isset($_SERVER['REQUEST_URI']) && str_starts_with($_SERVER['REQUEST_URI'], '/zenweb')) {
    $_SERVER['SCRIPT_NAME'] = '/zenweb/index.php';
    $_SERVER['PHP_SELF'] = '/zenweb/index.php';
}

$app->handleRequest(Request::capture());

