<?php

$api = app('Dingo\Api\Routing\Router');
/** @var Dingo\Api\Routing\Router $api */
$api->version('v1', function ($api) {
    /** @var Dingo\Api\Routing\Router $api */
    $api->get('hello_world', function () {
        return ['Hello World v1'];
    });
});
/** @var Dingo\Api\Routing\Router $api */
$api->version('v2', function ($api) {
    /** @var Dingo\Api\Routing\Router $api */
    $api->get('hello_world', function () {
        return ['Hello World v2'];
    });
});

/** @var Dingo\Api\Routing\Router $api */
$api->version('v1',['middleware' => ['throttle:100,1'],'namespace'=>'App\Http\Controllers\Api'], function ($api) {
    /** @var Dingo\Api\Routing\Router $api */
    $api->get('ad', 'v1\AdController@index');
});

/** @var Dingo\Api\Routing\Router $api */
$api->version('v1', function ($api) {
    /** @var Dingo\Api\Routing\Router $api */
    $api->get('users', function (){
        $rules = [
            'username' => ['required', 'alpha'],
            'password' => ['required', 'min:7']
        ];
        $payload = app('request')->only('username', 'password');
        $validator = app('validator')->make($payload, $rules);
        if ($validator->fails()){
            throw new Dingo\Api\Exception\StoreResourceFailedException('Could not create new user.', $validator->errors());
        }
    });
});
