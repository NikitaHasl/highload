<?php

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
