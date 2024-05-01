<?php 

require_once 'data/Manager.php';

$manager = new Manager();
$manager->name = 'Muhammad Jidan';
$manager->sayHello('Joko');

$vp = new VicePresident();
$vp->name = 'Budi';
$vp->sayHello('Joko');

