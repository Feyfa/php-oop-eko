<?php 

require_once "helper/MathHelper.php";

use Helper\MathHelper;

echo MathHelper::$name . "\n";

MathHelper::$name = "Muhammad Jdian";
echo MathHelper::$name . "\n";

$result = MathHelper::sum(1,2,3,4);
echo $result;
