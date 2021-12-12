<?php

require_once('../vendor/autoload.php');

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('name');
$log->pushHandler(new StreamHandler('log/my.log', Logger::WARNING));

$log->warning('foo');
$log->error('bar');

$log->warning('Memory1 '.memory_get_usage());

switch ($_SERVER['REQUEST_URI']) {
    case '/':
        require './home.php';
        break;
    case '/about':
        require './about.php';
        break;
    case '/info':
        require './info.php';
        break;
}

$log->warning('Memory2 '.memory_get_usage());