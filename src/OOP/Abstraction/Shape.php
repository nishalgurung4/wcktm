<?php
namespace Nishal\OOP\Abstraction;

/**
 * To achieve 1-100% abstraction, we use abstract class
 */
abstract class Shape
{

    //we only know that area can be calculated but don't know how to calculate
    public abstract function area():float;

    public function displayShapeType()
    {
        echo get_class($this);
    }
}