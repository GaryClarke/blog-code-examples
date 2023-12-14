<?php

class Greet
{

    //Our first method
//    public function sayHello($name){
//        print "Hello " . $name;
//    }
//

//Our second method

//    public function sayHello($name, $message = ' you are welcome'){
//         print "Hello " . $name . $message;
//    }


//Our Final Method
    public function sayHello($name, $message = ' you are welcome', $billingMessage = ' your total charge is $200'){
        print "Hello " . $name . $message . $billingMessage;
    }
}