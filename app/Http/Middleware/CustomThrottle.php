<?php


namespace App\Http\Middleware;


use Dingo\Api\Http\RateLimit\Throttle\Throttle;
use Illuminate\Container\Container;

class CustomThrottle extends Throttle
{

    public function match(Container $container)
    {
        // TODO: Implement match() method.
        // Perform some logic here and return either true or false depending on whether
        // your conditions matched for the throttle.
    }
}
