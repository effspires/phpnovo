<?php
    use app\core\Router;

    session_start();

    $_SESSION['message'] = "";

    require '../config/config.php';
    require '../vendor/autoload.php';

    Router::run();