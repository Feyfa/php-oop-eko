<?php 

require_once 'data/SayGoodBay.php';

use Data\Traits\{Person, SayGoodBay, SayHello};

$person = new Person();
$person->goodBye('Joko');
$person->hello('Budi');
$person->hai('Badut');

$person->name = 'Muhammad Jidan';
var_dump($person);

$person->run();