<?php 

require_once "data/Shape.php";

use Data\{Shape, Rectangle};

$shape = new Shape();
echo $shape->getCorner() . "\n";

$rectangle = new Rectangle();
echo $rectangle->getCorner() . "\n";
echo $rectangle->getParentCorner() . "\n";