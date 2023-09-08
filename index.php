<?php

require __DIR__.'/vendor/autoload.php';


// Create Router instance
$router = new \Bramus\Router\Router();

//Inverting with interface
$router->get('/dip-with-ioc-interface/input/{inputMethod}/output/{outputMethod}', '\Nishal\DipWithIoC\InvertingWithInterface\DemoController@handle');


$router->run();