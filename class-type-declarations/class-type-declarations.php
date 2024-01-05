<?php


require_once 'CarShop.php';
require_once 'Car.php';

$car1 = new Car("Mercedez Benz", "red");
$car2 = new Car("Mercedez GLE", "green");


$carShop = new CarShop();

$carShop->addCar($car1);
$carShop->addCar($car2);


foreach ($carShop->cars as $car){
    print $car->name;
}