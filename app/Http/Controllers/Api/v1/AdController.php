<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Models\Ad;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Request;

class AdController extends Controller
{

    public function index()
    {
//        Redis::setex('site_name', 10, 'Lumen的redis');
//        return Redis::get('site_name');

    }
}
