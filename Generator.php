<?php 

function getGenap(int $max): Iterator
{
    $array = [];

    for($i = 0; $i <= $max; $i++) {
        if($i % 2 === 0) {
            $array[] = $i;
        }
    }

    return new ArrayIterator($array);
}

foreach(getGenap(10) as $value) 
{
    echo "$value\n";
}

echo "\n";

function getGanjil(int $max): Iterator
{
    for($i = 0; $i <= $max; $i++) {
        if($i % 2 === 1) {
            // dengan menggunakan yield, tidak perlu lagi membuat variabel array, lalu menggunakan class ArrayIterator lagi
            yield $i;
        }
    }
}

foreach(getGanjil(10) as $value)
{
    echo "$value\n";
}