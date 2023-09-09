<?php
namespace Nishal\OOP\Inheritance;

class DemoController
{
	public function handle():void
    {
        //cat
        $kitty = new Cat();
        $kitty->walk();

        echo "<br />";
        
        //human
        $matt = new Human();
        $matt->walk();

    }

}