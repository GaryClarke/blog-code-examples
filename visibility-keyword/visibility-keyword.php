<?php

require_once 'Son.php';
require_once 'Father.php';


$son = new Son();

//this will throw an error
print $son->getFamilyName();
