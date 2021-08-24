<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;

class AdController extends Controller
{

    public function index(int $cid = 0)
    {
        if (!$cid) {
            return [false];
        }
    }


    public function post()
    {
        return ['测试'];
    }


    public function ceshi()
    {
        $now = strval(time());
        Redis::setex('site_name', 10, 'Lumen的redis' . $now);
        return Redis::get('site_name');
    }
}
