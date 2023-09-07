<?php
namespace Nishal\OOP\Abstraction;

/**
 * 100% abstraction
 */
interface Drawable
{
    public function setColor(string $color):void;

    public function setPosition(float $x, float $y):void;

    public function draw():void;
}