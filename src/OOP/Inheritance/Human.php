<?php
namespace Nishal\OOP\Inheritance;

class Human extends Animal
{
	public function walk()
	{
		$this->setNoOfLeg(2);

		echo "walking with $this->noOfLeg Legs";
	}
}