<?php

$http = new swoole_http_server("0.0.0.0", 9000);

$http->on("start", function ($server) {
    echo "Swoole http server is started at http://127.0.0.1:9000\n";
});

$http->on("request", function ($request, $response) {
    $response->header("Content-Type", "text/plain");
    $response->end("Hello World\n");
});

$http->start();