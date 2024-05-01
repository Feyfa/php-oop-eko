<?php 

require_once "data/Person.php";

$eko = new Person('Eko', 'Subang');
$jidan = new Person('Jidan', 'Jakarta Barat');


function a()
{
    $a = new Person('a', 'a');
}
function b()
{
    $b = new Person('b', 'b');
}

a();
b();

echo "PROGRAM SELESAI\n";