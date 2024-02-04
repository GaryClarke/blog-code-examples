<?php

require_once 'Father.php';
require_once 'Son.php';
require_once 'GovernmentWorker.php';
require_once 'PrivateWorker.php';

//$son = new Son();
//
//print $son->Allproperties();
//print $son->Allbusinesses();

$governmentWorker = new GovernmentWorker();
$tax = $governmentWorker->calculateTax();

print $tax;