<?php

require_once 'core/App.php';
require_once 'core/Controller.php';

// Define the base directory
define('BASE_DIR', dirname(__DIR__));

// Autoloader for classes
spl_autoload_register(function ($class) {
    // Convert namespace into file path
    $path = BASE_DIR . '/' . str_replace('\\', '/', $class) . '.php';

    if (file_exists($path)) {
        require_once $path;
    } else {
        // Optional: Log error or handle missing class files
        http_response_code(500);
        echo "Class '$class' not found in '$path'.";
        exit;
    }
});