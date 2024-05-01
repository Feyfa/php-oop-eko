<?php 

require_once "data/Animal.php";

use Data\{Animal, Cat, Dog};

// tidak bisa digunakan karena ini abstrac class
// $animal = new Animal();
// $animal->name = 'Puppy';

$cat = new Cat();
$cat->name = 'Meria';
$cat->run();
$cat->suara();

$dog = new Dog();
$dog->name = 'Siam';
$dog->run();
$dog->suara();


