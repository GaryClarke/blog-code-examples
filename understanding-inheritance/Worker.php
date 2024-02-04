<?php

class Worker
{
    public function calculateTax(): int{
        return $this->salary * 10 /100;
    }

}