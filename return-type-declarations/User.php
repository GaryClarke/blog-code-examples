<?php

class User
{
    public function __construct(public string $name, public int $age, public string $gender, public int $yearOfBirth)
    {
    }
}

