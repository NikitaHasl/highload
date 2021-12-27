<?php

namespace App\Http\Controllers;

use App\Jobs\ExampleJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class ExampleQueue extends Controller
{
    public function index()
    {
        ExampleJob::dispatch('Nikita')->onQueue('newQueue');
        if (Redis::get('name:Nikita')){
            return view('start', ['name'=>'user']);
        } else {
            return view('start', ['name'=>Redis::get('name:Nikita')]);
        }
    }
}
