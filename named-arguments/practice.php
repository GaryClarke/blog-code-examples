<?php

require 'Greet.php';

$app = new Greet();

//Without Named Arguments
//$app->sayHello("John", " welcome to our app", " your total charge is $300");


//With Named Arguments
$app->sayHello(name: "John", message: "welcome to our app", billingMessage: " your total charge is $300");