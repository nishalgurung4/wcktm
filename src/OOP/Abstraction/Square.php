<?php
namespace Nishal\OOP\Abstraction;

class Square extends Shape implements Drawable
{
    private float $length;
    
    //Square must override abstract method
    public function area(): float
    {
        return $this->length * $this->length;
    }

    public function setColor(string $color):void
    {
        echo "set color";
    }

    public function setPosition(float $x, float $y):void
    {
        echo "set coordinate";
    }

    public function draw():void
    {
        echo "draw square";
    }
}