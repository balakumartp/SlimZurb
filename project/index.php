<?php
session_start();
ini_set("display_errors",1);

require __DIR__ . '/vendor/autoload.php';
// Load constant file
require __DIR__ . '/app/constants.php';

// Instantiate the app
$settings = require __DIR__ . '/app/settings.php';
$app = new \Slim\App($settings);

// Set up dependencies
require __DIR__ . '/app/dependencies.php';

// Register middleware
require __DIR__ . '/app/middleware.php';

// Register routes
require __DIR__ . '/app/routes.php';
 
$app->run();
