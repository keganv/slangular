<?php

// Application middleware
// https://www.slimframework.com/docs/v3/concepts/middleware.html
// https://github.com/slimphp/Slim/wiki/Middleware-for-Slim-Framework-v3.x
// e.g: $app->add(new \Slim\Csrf\Guard);

$app->options('/api', function ($request, $response, $args) {
    return $response;
});

$app->add(function ($req, $res, $next) {
    $response = $next($req, $res);
    return $response
        ->withHeader('Access-Control-Allow-Origin', 'http://localhost:4200')
        ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
        ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
});



