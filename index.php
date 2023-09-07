<?php

require __DIR__.'/vendor/autoload.php';


// Create Router instance
$router = new \Bramus\Router\Router();

//oop
$router->get('polymorphism', '\Nishal\OOP\Polymorphism\DemoController@handle');


$router->run();