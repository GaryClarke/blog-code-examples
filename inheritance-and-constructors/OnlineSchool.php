<?php

class OnlineSchool extends School
{
    public string $platform;

    public function __construct($name, $platform)
    {
        //calling the parent's class constructor
        parent::__construct($name);

        $this->platform = $platform;
    }
}