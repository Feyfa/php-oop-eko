<?php 

require_once 'data/Student.php';

$student1 = new Student();
$student1->id = 1;
$student1->name = 'Muhammad Jidan';
$student1->value = 100;

$student2 = new Student();
$student2->id = 1;
$student2->name = 'Muhammad Jidan';
$student2->value = 100;

// comparing object == itu untuk mengecek apakah semua properti dari object $student1 dengan $student2 itu sama
var_dump($student1 == $student2);

// comparing object === itu mengecek apakah ke dua object tersebut sama dilihat dari lokasi memori nya
var_dump($student1 === $student2);
var_dump($student1 === $student1);