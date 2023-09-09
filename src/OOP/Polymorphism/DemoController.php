<?php
namespace Nishal\OOP\Polymorphism;

class DemoController
{
	public function handle():void
    {
        $animals = [new Dog, new Cat];

        foreach($animals as $animal) {
            // echo ($animal instanceof Animal);
            echo $animal->makeSound();
            echo "<br />";
        }

    }

}