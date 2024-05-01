<?php 

require_once "data/Person.php";

$person = new Person('Eko', 'Subang');
$person->name = 'Muhammad Jidan';
$person->address = 'Jakarta Barat';
$person->country = 'Indonesia';

var_dump($person);

echo "Name : $person->name\n";
echo "Address : $person->address\n";
echo "Country : $person->country\n";

$person2 = new Person('Budi', null);
$person2->name = 'rafeyfa zulfiyani';
$person2->address = null;
$person2->country = 'Indonesia';

var_dump($person2);

echo "Name : $person2->name\n";
echo "Address : $person2->address\n";
echo "Country : $person2->country\n";

// error
// $person2->name = [];