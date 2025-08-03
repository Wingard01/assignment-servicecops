<?php
// Handles middleware chaining logic

class MiddlewarePipeline
{
    private $middlewares = [];

    public function add(callable $middleware)
    {
        $this->middlewares[] = $middleware;
    }

    public function handle($request, callable $finalHandler)
    {
        $middlewareChain = array_reduce(
            array_reverse($this->middlewares),
            function ($next, $middleware) {
                return function ($request) use ($middleware, $next) {
                    return $middleware($request, $next);
                };
            },
            $finalHandler
        );

        return $middlewareChain($request);
    }
}

