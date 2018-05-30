<?php

$app->map(['GET', 'POST', 'PUT', 'DELETE', 'PATCH'], '/api', function ($req, $res) {
    $handler = $this->notFoundHandler; // handle using the default Slim page not found handler
    return $handler($req, $res);
});

// Routes
$app->any('/[{path:.*}]', \Service\RouteGenerator::class . ':buildRoute');
