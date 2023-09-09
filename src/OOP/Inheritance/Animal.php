<?php
namespace Nishal\OOP\Inheritance;

class Animal
{
	public int $noOfLeg;

	public function setNoOfLeg(int $noOfLeg):void
	{
		$this->noOfLeg = $noOfLeg;
	}

}