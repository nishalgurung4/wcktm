<?php
namespace Nishal\OOP\Inheritance;

class Cat extends Animal
{
	public function walk():void
	{
		$this->setNoOfLeg(4);
		echo "walking with $this->noOfLeg Legs";
	}
}