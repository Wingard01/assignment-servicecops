<?php
// Define simple API routes here

function handleRoutes($request)
{
    $uri = $_SERVER['REQUEST_URI'];

    if ($uri === '/api/hello') {
        header('Content-Type: application/json');
        return json_encode(["message" => "Hello, API is working well"]);
    }

    // For all other routes
    http_response_code(404);
    return json_encode(["error" => "Route not found"]);
}
