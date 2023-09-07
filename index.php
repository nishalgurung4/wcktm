<?php

require __DIR__.'/vendor/autoload.php';


// Create Router instance
$router = new \Bramus\Router\Router();


//problem
$router->get('problem', '\Nishal\Report\DemoController@handle');

$router->run();