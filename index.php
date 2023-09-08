<?php

require __DIR__.'/vendor/autoload.php';


// Create Router instance
$router = new \Bramus\Router\Router();

//dip with ioc object creation with factory pattern
$router->get('/dip-with-ioc-object-factory/input/{inputMethod}/output/{outputMethod}', '\Nishal\DipWithIoC\InvertingObjectCreation\DemoController@handle');


$router->run();