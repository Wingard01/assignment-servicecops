<?php
// Middleware that logs request info to logs.txt

function RequestLoggerMiddleware($request, callable $next)
{
    $method = $_SERVER['REQUEST_METHOD'] ?? 'UNKNOWN';
    $uri = $_SERVER['REQUEST_URI'] ?? 'UNKNOWN';
    $timestamp = date('Y-m-d H:i:s');

    $log = "[$timestamp] $method $uri" . PHP_EOL;

    // Append log to file
    file_put_contents('logs.txt', $log, FILE_APPEND);

    // Forward request to the next layer
    return $next($request);
}

