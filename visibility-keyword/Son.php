<?php

require 'Father.php';
class Son extends Father
{
    public function printSurname(): string
    {
        return $this->surname;
    }
}