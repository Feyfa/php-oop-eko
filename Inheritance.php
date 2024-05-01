<?php 

require_once 'data/Manager.php';

$manager = new Manager();
$manager->name = 'Budi';
$manager->sayHello('Joko');

$vicePresident = new VicePresident();
$vicePresident->name = 'Timoty Ronald';
$vicePresident->sayHello('Windah');
