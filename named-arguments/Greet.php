<?php

class Greet
{

    //Our first method
//    public function sayHello(string $name): void
//    {
//        print "Hello " . $name;
//    }
//

//Our second method

//    public function sayHello(string $name, string $message = ' you are welcome'): void
//    {
//         print "Hello " . $name . $message;
//    }


//Our Final Method
    public function sayHello(string $name, string $message = ' you are welcome', string $billingMessage = ' your total charge is $200'): void
    {
        print "Hello " . $name . $message . $billingMessage;
    }
}