<?php

class Database
{
    public array $users;

    public function __construct(public string $name)
    {
    }

    //using return type declarations
    public function addUser(User $user): void {
        $this->users[] = $user;
    }

    //using return type declarations
    public function getNumberOfUsers(): int{
        return count($this->users);
    }

}