<?php
    ini_set('display_errors', 'On');
    session_start();
    global $config;
    require 'vendor/autoload.php';
    require 'config.php';
    date_default_timezone_set($config['timezone']);
    \Core\Core::getInstance()->run();
