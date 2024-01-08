<?php

require_once 'Database.php';
require_once 'User.php';

$database = new Database("users");

$user1 = new User("Emeka", 12, "Male", 2004);

$user2 =  new User("Daniel", 15, "Male", 1990);
$database->addUser($user1);
$database->addUser($user2);

print $database->numberOfUsers();