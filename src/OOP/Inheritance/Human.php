<?php
namespace Nishal\OOP\Inheritance;

class Human extends Animal
{
	public function walk():void
	{
		$this->setNoOfLeg(2);

		echo "walking with $this->noOfLeg Legs";
	}
}