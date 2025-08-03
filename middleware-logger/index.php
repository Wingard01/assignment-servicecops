<?php
// Main entry point of the app

require_once __DIR__ . '/core/MiddlewarePipeline.php';
require_once __DIR__ . '/middleware/RequestLoggerMiddleware.php';
require_once __DIR__ . '/routes.php';

// Create the pipeline
$pipeline = new MiddlewarePipeline();

// Register the logger middleware
$pipeline->add('RequestLoggerMiddleware');

// Handle request using the pipeline
$response = $pipeline->handle($_SERVER, 'handleRoutes');

// Show the response
echo $response;

