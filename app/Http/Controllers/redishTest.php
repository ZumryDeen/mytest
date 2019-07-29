<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Redis\RedisServiceProvider;
use Illuminate\Support\Facades\Redis;


class redishTest extends Controller
{
    //

    public function test(){


      /*  $redis = Redis::connection();

        $redis->set('username','haya');*/
Redis::set('car','celerio');

/*$newre = new Redis();
$newre->set('myname','denoo');
       //Redis::set('name','deen');*/



    }


}
