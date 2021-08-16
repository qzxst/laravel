<?php

use Symfony\Component\VarDumper\VarDumper;

if (!function_exists('dd')){
    function  dd($var,...$moreVars){
        VarDumper::dump($var);

        foreach ($moreVars as $v) {
            VarDumper::dump($v);
        }

        if (1 < func_num_args()) {
            return func_get_args();
        }

        return $var;
    }
}
