<?php 

require_once "data/Student.php";

$student1 = new Student();
$student1->id = 1;
$student1->name = "Muhammad Jidan";
$student1->value = 100;

// $student1() ketika menggunakan bentuk ini, maka sebenarnya dia menjalankan sebuah function yang bernama __invoke, yang method nya berada di dalam class tersebut
$student1(1,2,3,4,5);