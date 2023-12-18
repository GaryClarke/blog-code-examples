<?php

class Cake
{
    //This is our constructor method
//    public function __construct()
//    {
//        print "Hey, I am the Constructor and i am a Magic method that is called whenever you create a new object off this class";
//    }

//our name and type properties
//    public $name;
//    public $type;
//
//    //our constructor setting up our cake object and giving it a name and type
//    public function __construct(string $name, string $type)
//    {
//        $this->name = $name;
//        $this->type = $type;
//    }

//Constructor promoted properties

    public function __construct(public string $name, public string $type)
    {
    }
}