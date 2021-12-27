<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;

class ExampleCacheController
{
    public function index($name)
    {
//        \cache()->flush();
        $startTime = microtime(true);
        $cacheKey = 'key_' . $name;

        $view = cache()->remember($cacheKey, 100, function () use ($name) {
            return view('start', ['name'=>$name])->render();
        });

        $finishTime = microtime(true) - $startTime;
        $memory = xdebug_memory_usage();
        echo "Время: ${finishTime}, память: ${memory}";
        return $view;

    }

    public function queue()
    {

    }
}
