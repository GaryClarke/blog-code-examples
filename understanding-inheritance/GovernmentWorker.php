<?php

require_once 'Worker.php';
class GovernmentWorker extends Worker
{
    public string $name;

    public int $salary = 10000;


    //here, we are overiding the CalculateTax method and Calculating the tax as 5%
    public function calculateTax(): int{
        return $this->salary * 5 /100;
    }

}