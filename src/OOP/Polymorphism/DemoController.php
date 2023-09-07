<?php
namespace Nishal\OOP\Polymorphism;

class DemoController
{
	public function handle()
    {
        $animals = [new Dog, new Cat];

        foreach($animals as $animal) {
            // echo ($animal instanceof Animal);
            $animal->makeSound();
            echo "<br />";
        }

    }

}