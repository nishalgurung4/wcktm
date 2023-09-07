<?php
namespace Nishal\OOP\Abstraction;

class Rectangle extends Shape implements Drawable
{
    private $length;
    private $width;
    
    //Square must override abstract method
    public function area():float
    {
        return $this->length * $this->width;
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
        echo "draw rectangle";
    }
}