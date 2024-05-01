<?php 

$dateTime = new DateTime();
// untuk mengganti timezone di asia/jakarta
$dateTime->setTimezone(new DateTimeZone('Asia/Jakarta'));
var_dump($dateTime);

// untuk costum tahun, bulan, tanggal
$dateTime->setDate(1990, 1, 20);
// untuk costum jam, menit, detik
$dateTime->setTime(10, 20, 30);
var_dump($dateTime);

// add dan new DateInterval() digunakan untuk menambahkan waktu
$dateTime->add(new DateInterval("P1Y"));
var_dump($dateTime);

// jika menggunakan invert = true, itu artinya mengurangi waktu
$minusOneMounth = new DateInterval("P1M");
$minusOneMounth->invert = true;
$dateTime->add($minusOneMounth);
var_dump($dateTime);

// digunakan untuk menampilkan waktu menjadi string, dan urutannya costum, bisa menggunakan format
// H = hour / jam
// i = minute / menit
// s = second / detik
// d = date / tangga
// m = mounth / bulan
// Y = year / tahun
echo $dateTime->format("H:i:s d-m-Y") . PHP_EOL;

// digunakan untuk mengubah waktu string menjadi object DateTime, dan waktu dalam string nya pun bisa di costum
// jika string waktu nya salah maka akan menghasilkan false
$date = DateTime::createFromFormat(
    "H:i:s d-m-Y", 
    "10:20:30 20-12-1990",
    // "SALAH",
    new DateTimeZone('Asia/Jakarta')
);
var_dump($date !== false ? $date : "Format Waktu Tidak Sesuai");

