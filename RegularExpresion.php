<?php 

$matches = [];

// ini digunakan unuk mengecek apakah ada kata eko,awan,edy ada di string "Eko Kurniawan Khannedy" tanpa memperdulikan huruf kecil dan besar, 
// jika ada, maka kalimat nya akan dimasukan ke dalam array $matches
$result = (bool) preg_match_all(
    "/eko|awan|edy/i", 
    "Eko Kurniawan Khannedy", 
    $matches
); 

var_dump($matches);
var_dump($result);

// digunakan untuk mengganti kata yang mengandung anjing,bangsat, yang ada di string "Dasar Lu Anjing Dan Bangsat" tidak memperdulikan huruf kecil dan besar
$result = preg_replace(
    "/anjing|bangsat/i",
    "***",
    "Dasar Lu Anjing Dan Bangsat"
);
var_dump($result);

// untuk mengambil kata lalu dimasukan menjadi array, dan pemisahnya adalah \s(spasi) ,(koma) -(minus)
$result = preg_split(
    "/[\s,-]/",
    "Eko Kurniawan Khannedy,Programmer,Zaman-Now"
);
var_dump($result);

