<?php 

require_once "data/Person.php";

define('APPLICATION', 'Belajar PHP OOP');
const APP_VERSION = "1.0.0";

echo APPLICATION . "\n";
echo APP_VERSION . "\n";

echo Person::AUTHOR . "\n";