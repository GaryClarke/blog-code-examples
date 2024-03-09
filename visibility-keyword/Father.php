<?php

class Father
{
    public string $surname = "Timothy";
    public string $familyName = "Tim";

    public function getFamilyName (): string
    {
        return $this->familyName;
    }
}