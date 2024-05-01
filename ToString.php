<?php 

require_once "data/Student.php";

$student1 = new Student();
$student1->id = 1;
$student1->name = "Muhammad Jidan";
$student1->value = 100;

// ketika mengconversi menjadi string, maka function yang akan dijalankan adalah __toString(), syaratnya harus ditulis dahulu __toString() di dalam class nya
$string = (string) $student1;
echo $string;

// bisa seperti ini
echo $student1;