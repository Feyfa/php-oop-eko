<?php 

$array = [
    'firstName' => 'Muhammad',
    'lastName' => 'Jidan'
];

// mengubah array menjadi object
$object = (object) $array;
var_dump($object);
echo "FirstName : $object->firstName\n";
echo "LastName : $object->lastName\n";

$arrayLagi = (array) $object;
var_dump($arrayLagi);


require_once 'data/Person.php';

$person = new Person('Jidan', 'Jakarta');
var_dump($person);

$arrayPerson = (array) $person;
var_dump($arrayPerson);