<?php


namespace App\Http\Middleware;


use Closure;
use Illuminate\Http\Request;

class CidMiddleware
{

    //验证cid
    public function handle(Request $request, Closure $next)
    {
        $cid = $request->get('cid', 0);
        return $next($request);
    }

}
