<?php
namespace Nishal\OOP\Abstraction;

class DemoController
{
    public function handle()
    {
       $square = new Square();
       $square->draw();

        echo "<br />====== <br />";

       $rectangle = new Rectangle();
       $rectangle->draw();
    }
}