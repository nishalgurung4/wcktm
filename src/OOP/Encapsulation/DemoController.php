<?php
namespace Nishal\OOP\Encapsulation;

class DemoController
{
    public function handle()
    {
        $honda = new Bike();
        $honda->startEngine();
        $honda->releaseClutch();
        $honda->accelerate();
        $honda->accelerate();
        $honda->shiftGear("up");
        $honda->accelerate();
        $honda->accelerate();
        echo "moving at ". $honda->speed() . " km/hr";

        echo "<br>======================<br/>";

        $honda->pressClutch();
        $honda->shiftGear("down");
        while ($honda->speed() != 0) {
            $honda->pressBrake();
        }   
        echo "stopped at ". $honda->speed() . " km/hr";
    }
}