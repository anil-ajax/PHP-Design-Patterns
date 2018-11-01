<?php

/**
 * Factory design pattern example
 * Refer to Readme for benefits of using factory pattern
 * @author Anil Kumar (https://github.com/anil-ajax)
 * This code follow PSR standards (https://github.com/anil-ajax/psr-standards)
 */

class Car
{
    private $model;
    private $color;

    public function __construct($model, $color)
    {
        $this->model = $model;
        $this->color = $color;
    }

    public function getDetails()
    {
        return $this->model . ' ' . $this->color;
    }
}

class CarFactory
{
    public static function create($model, $color)
    {
        return new Automobile($model, $color);
    }
}

$maruti = CarFactory::create('Dezire', 'Red');

var_dump($maruti->getDetails()); 

