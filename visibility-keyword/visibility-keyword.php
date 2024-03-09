<?php

require_once 'Son.php';
require_once 'Father.php';


$son = new Son();

print $son->printSurname();

print $son->getFamilyName();
