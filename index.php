<?php

require __DIR__.'/vendor/autoload.php';
$container = require __DIR__ . '/bootstrap.php';

// Create Router instance
$router = new \Bramus\Router\Router();

// How an IoC container is helpful to apply a DI 
$router->get('/ioc-container', '\Nishal\IocContainer\DemoController@handle');


$router->run();