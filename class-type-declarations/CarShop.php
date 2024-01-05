<?php

class CarShop
{
    public $cars = [];

    public function addCar(Car $car): void
    {
        $this->cars[] = $car;
    }
}