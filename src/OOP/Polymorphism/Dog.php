<?php
namespace Nishal\OOP\Polymorphism;

class Dog extends Animal
{
	public function makeSound():string
	{
		return "Woof!";
	}
}