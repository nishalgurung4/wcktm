<?php
namespace Nishal\OOP\Encapsulation;

/**
 * Encapuslate data and behavior in a single class
 * Encapsulation does not provide complete security because we can access private members of the class using the reflection API, 
 * however Abstraction does not allow us to access static, abstract data members of a class.
 */
class Bike
{
    //data hidding
    private float $speed = 0;
    private bool $isEngineStart = false;
    private bool $isClutchPress = false;
    private int $gear = 0 ;

    private function startIgnition():void
    {
       $this->isEngineStart;
    }

    private function stopIgnition():void
    {
        $this->isEngineStart;
    }
    
    public function startEngine():void
    {
       $this->startIgnition();
    }

    public function stopEngine():void
    {
        $this->stopIgnition();
    }

    public function pressBrake():void
    {
        $this->speed--;
    }

    public function accelerate():void
    {
        $this->speed++;
    }

    public function pressClutch():void
    {
        $this->isClutchPress = true;
    }

    public function releaseClutch():void
    {
        $this->isClutchPress = false;
    }

    public function shiftGear($direction):void
    {
        if ($direction == "up") {
            $this->gear++;
        } else {
            $this->gear--;
        }
    }

    public function speed():float
    {
        return $this->speed;
    }
}