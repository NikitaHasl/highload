<?php

require_once('../vendor/autoload.php');

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('name');
$log->pushHandler(new StreamHandler('log/my.log', Logger::WARNING));

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

$log->alert('Потрачено памяти для выполнения скрипта: ' .(memory_get_usage() / 1024) . 'kb');