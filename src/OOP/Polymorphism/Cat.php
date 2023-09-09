<?php
namespace Nishal\OOP\Polymorphism;

class Cat extends Animal
{
	public function makeSound():string
	{
		return "Meow!";
	}
}