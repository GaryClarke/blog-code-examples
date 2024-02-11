<?php

require_once  'School.php';
require_once 'PhysicalSchool.php';
require_once 'OnlineSchool.php';

$onlineSchool = new OnlineSchool("School of Coding", "Udemy");

print $onlineSchool->name;
print $onlineSchool->platform;
print $onlineSchool->study();

$physicalSchool = new PhysicalSchool("School of Coding", "New Jersey");

print $physicalSchool->name;
print $physicalSchool->location;
print $physicalSchool->study();