<?php

use Illuminate\Foundation\Application;

define('LARAVEL_START', microtime(true));

// Composer autoload
require __DIR__.'/../vendor/autoload.php';

// Bootstrap app
$app = require_once __DIR__.'/../bootstrap/app.php';

// Run application
$app->run();