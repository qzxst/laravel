<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

/** @var Laravel\Lumen\Routing\Router $router */

$router->get('/', function () use ($router) {

    return $router->app->version();
});

$router->get('/hello/{id}', function ($id) use ($router) {
    return $router->app->version();
});

$router->group(
    ['prefix' => 'admin'], //prefix URI前缀  App\Http\Controllers
    function () use ($router) {
        $router->get('index', 'Admin\LoginController@index');
    }
);
