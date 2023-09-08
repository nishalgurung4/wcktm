<?php

require __DIR__.'/vendor/autoload.php';


// Create Router instance
$router = new \Bramus\Router\Router();


//Inverting object creation using DI
$router->get('/dip-with-ioc-di/input/{inputMethod}/output/{outputMethod}', '\Nishal\DipWithIoC\InvertingObjectCreation\DI\DemoController@handle');

$router->run();