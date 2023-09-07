<?php

require __DIR__.'/vendor/autoload.php';


// Create Router instance
$router = new \Bramus\Router\Router();

//oop
$router->get('encapsulation', '\Nishal\OOP\Encapsulation\DemoController@handle');
$router->get('inheritance', '\Nishal\OOP\Inheritance\DemoController@handle');
$router->get('abstraction', '\Nishal\OOP\Abstraction\DemoController@handle');
$router->get('polymorphism', '\Nishal\OOP\Polymorphism\DemoController@handle');


$router->run();