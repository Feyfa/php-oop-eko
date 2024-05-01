<?php 

require_once 'data/Category.php';

$category = new Category();
$category->setName("Handphone");
$category->setExpensive(true);

echo "Name : {$category->getName()}\n";
echo "Expansive : {$category->isExpensive()}\n";

$category->setName("");
$category->setExpensive(true);

echo "Name : {$category->getName()}\n";
echo "Expansive : {$category->isExpensive()}\n";