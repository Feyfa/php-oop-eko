<?php 

require_once "data/Conflict.php";

use Data\One\Conflict as Conflict1;
use Data\Two\Conflict as Conflict2;

$conflict1 = new Conflict1();
$conflict1->nama = 'Muhammad JIdan';
echo $conflict1->nama . "\n";

$conflict2 = new Conflict2();
$conflict2->barang = 'Indomie';
echo $conflict2->barang . "\n";