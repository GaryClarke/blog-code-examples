<?php

class Father
{
    public string $surname = "Timothy";

    private function getFamilyName (): string
    {
        return $this->surname;
    }
}