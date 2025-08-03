# PHP Middleware-Based Request Logger

This project implements a simple middleware system in PHP to log incoming HTTP requests. It is designed for demonstration purposes,

##  Features

- Logs every HTTP request to a file `logs.txt`
- Captures:
  -  HTTP method (e.g., GET)
  - Requested URI (e.g., /api/hello)
  -  Timestamp (e.g., 2025-08-03 12:40:27)
- Built using a custom middleware pipeline
- Allows chaining of future middleware (e.g.,  headers, etc.)
- Includes a working API route: `/api/hello`


##  How to Run
1. Start the server: php -S localhost:8000

 2.Visit in your browser
 http://localhost:8000/api/hello

 ##  out put

 {"message":"Hello, API is working well"}


## What Gets Logged?
Every request  is logged in logs.txt in the following format:

[2025-08-03 12:40:27] GET /api/hello

 


