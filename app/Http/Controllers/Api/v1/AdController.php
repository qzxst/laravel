<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Support\Env;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Request;
use Zhuzhichao\IpLocationZh\Ip;
use itbdw\Ip\IpLocation;

class AdController extends Controller
{

    public function index(int $cid = 0)
    {
        dd(Ip::find(Request::getClientIp()));
        if (!$cid) {
            return [false];
        }
    }


    public function post()
    {
        $ip = Request::ip();
        $country = $this->checkIp($ip);
        $country = $country['country'];
        $status = $country == '泰国' ? 1 : 2;
        dd(compact('status'));
    }


    public function ceshi()
    {
        $now = strval(time());
        Redis::setex('site_name', 10, 'Lumen的redis' . $now);
        return Redis::get('site_name');
    }

    public function ip()
    {
    }

    private function checkIp($ip): array
    {

        //        $ip = '67.220.90.13';
        //支持自定义文件路径
        $qqwry_filepath =  dir_path(base_path('public/abspath'))  . 'qqwry.dat';
        $info = IpLocation::getLocation($ip, $qqwry_filepath);
        return $info;
        /*print_r(IpLocation::getLocation($ip, $qqwry_filepath));exit;
        //通过ip获取county
        echo json_encode(IpLocation::getLocation($ip, $qqwry_filepath), JSON_UNESCAPED_UNICODE) . "\n";
        //直接用附带的版本
        echo json_encode(IpLocation::getLocation($ip), JSON_UNESCAPED_UNICODE) . "\n";*/
    }
}
