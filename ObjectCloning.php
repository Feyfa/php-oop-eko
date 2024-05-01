<?php 

require_once "data/Student.php";

$student1 = new Student();
$student1->id = 1;
$student1->name = "Muhammad JIdan";
$student1->value = 100;
$student1->setSample('XXX');
var_dump($student1);



//  jika menggunakan clone
$student2 = clone $student1;
var_dump($student2);

// jika dilakukan secara manual
// $student2 = new Student();
// $student2->id = $student1->id;
// $student2->name = $student1->name;
// $student2->value = $student1->value;


// $student1 = clone $student2 => $student2->__clone()
// saat melakukan clone, maka setelah di clone, akan menjalankan yang ini $student2->__clone()
// nah $student2->__clone() disinilah kita bisa memilih, properti mana saja yang tidak ingin di clone menggunakan unset