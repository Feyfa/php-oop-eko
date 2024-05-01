<?php 

require_once 'data/Student.php';

$student1 = new Student();

$student1->id = 1;
$student1->name = "Jidan";
$student1->value = 100;
$student1->setSample('sample');

// ketika menggunakan var_dump($student1) maka sebenarnya yang akan dipanggil itu adalah function __debugInfo() yang berada di dalam class tersebut
var_dump($student1);