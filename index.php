<?php

require __DIR__.'/vendor/autoload.php';


// Create Router instance
$router = new \Bramus\Router\Router();


//solution 1
$router->get('/solution1/input/{inputMethod}/output/{outputMethod}', '\Nishal\Report\DemoController@handle');

$router->run();