<?php

use Data\AnimalFood;
use Data\CatShelter;
use Data\DogShelter;
use Data\Food;

require_once 'data/Animal.php';
require_once 'data/AnimalShelter.php';

$catShelter = new CatShelter();
$cat = $catShelter->adobt('Mehuna');
$cat->eat(new AnimalFood());

$dogShelter = new DogShelter();
$dog = $dogShelter->adobt('Jahan');
$dog->eat(new Food());
