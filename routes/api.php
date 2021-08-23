<?php

$api = app('Dingo\Api\Routing\Router');
/** @var Dingo\Api\Routing\Router $api */
$api->version('v1', function ($api) {
    /** @var Dingo\Api\Routing\Router $api */
    $api->get('hello', function () {
        return ['hello world v1'];
    });
});

$api->version('v2', function ($api) {
    /** @var Dingo\Api\Routing\Router $api */
    $api->get('hello_world', function () {
        return ['Hello World v2'];
    });
});

/** @var Dingo\Api\Routing\Router $api */
$api->version('v1', [], function ($api) {
    /** @var Dingo\Api\Routing\Router $api */
    $api->get('ad', function () {
        return ['hello'];
    });
});
