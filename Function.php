<?php 

require_once "data/Person.php";

$eko = new Person('Eko', 'Subang');
$eko->name = 'Eko';
$eko->sayHello('Jidan');
$eko->info();

$joko = new Person('Joko', 'Cirebon');
$joko->name = 'Joko';
$joko->sayHello(null);
$joko->info();
