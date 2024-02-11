<?php

class PhysicalSchool extends School
{
    public string $location;

    public function __construct($name, $location)
    {
        //calling the parent's class constructor
        parent::__construct($name);

        $this->location = $location;
    }
}