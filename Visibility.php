<?php 

require_once 'data/Product.php';

$product = new Product('Indomie', 3000);

echo $product->getName() . "\n";
echo $product->getPrice() . "\n";

// error, karena properti ini private
// $product->name = 'Apple';
// $product->price = 10000;

$dummy = new ProductDummy('Teh Gelas', 1000);
$dummy->info();
