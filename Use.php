<?php 

require_once 'data/Conflict.php';
require_once 'data/Helper.php';

use Data\One\Conflict;
use function Helper\helpMe;
use const Helper\APPLICATION;

$conflict = new Conflict();
$conflict->nama = 'Muhammad Jidan';
echo $conflict->nama . "\n";

helpMe();

echo APPLICATION . "\n";