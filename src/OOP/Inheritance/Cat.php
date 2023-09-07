<?php
namespace Nishal\OOP\Inheritance;

class Cat extends Animal
{
	public function walk()
	{
		$this->setNoOfLeg(4);
		echo "walking with $this->noOfLeg Legs";
	}
}