<?php

require 'Greet.php';

$app = new Greet();

//Without Named Arguments
//$app->sayHello(name: "John",  billingMessage: "your total charge is $300");


//Without Named Arguments
//$app->sayHello("John", " welcome to our app", " your total charge is $300");


//With Named Arguments
$app->sayHello(name: "John",  billingMessage: " your total charge is $300");