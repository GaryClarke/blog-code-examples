<?php

class School
{
    public string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function study(): string{
        return "Studying";
    }
}